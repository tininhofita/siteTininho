<?php
require_once __DIR__ . '/../models/ContatoModel.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContatoController
{
    private $model;

    public function __construct()
    {
        $this->model = new ContatoModel();
    }

    public function enviarMensagem()
    {
        header('Content-Type: application/json');

        try {
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                throw new Exception('Método não permitido');
            }

            $nome = $_POST['nome'] ?? null;
            $telefone = $_POST['telefone'] ?? null;
            $email = $_POST['email'] ?? null;
            $assunto = $_POST['assunto'] ?? null;
            $descricao = $_POST['descricao'] ?? null;
            $recaptchaToken = $_POST['recaptchaToken'] ?? null;

            if (!$nome || !$telefone || !$email || !$assunto || !$descricao || !$recaptchaToken) {
                throw new Exception('Todos os campos são obrigatórios.');
            }

            // Validar ReCAPTCHA
            $start = microtime(true);
            if (!$this->validarRecaptchaEnterprise($recaptchaToken)) {
                throw new Exception('Falha na verificação do reCAPTCHA.');
            }

            // Salvar no banco de dados
            $start = microtime(true);
            $result = $this->model->salvarContato($nome, $telefone, $email, $assunto, $descricao);
            if (!$result['success']) {
                throw new Exception($result['error'] ?? 'Erro ao salvar no banco de dados');
            }

            // Enviar resposta ao cliente
            echo json_encode(['success' => true, 'message' => 'Mensagem enviada com sucesso!']);

            // Enviar email em segundo plano
            $start = microtime(true);
            $this->enviarEmail($nome, $telefone, $email, $assunto, $descricao);
        } catch (Exception $e) {
            echo json_encode(['success' => false, 'message' => $e->getMessage()], JSON_UNESCAPED_UNICODE);
        }
    }


    private function validarRecaptchaEnterprise($token)
    {
        $apiKey = 'AIzaSyCABp6zWWCh9wnjolhmHGEPJWb8bvYiiuM';
        $projectId = 'tininhofitacom';
        $siteKey = '6Lcu9qkqAAAAAG0EmIFhNQTLsMQSAQhUDv8P4mDF';


        $url = "https://recaptchaenterprise.googleapis.com/v1/projects/{$projectId}/assessments?key={$apiKey}";
        $data = [
            'event' => [
                'token' => $token,
                'siteKey' => $siteKey,
                'expectedAction' => 'submit_form_contato'
            ]
        ];

        // Configurações HTTP
        $options = [
            'http' => [
                'header'  => "Content-type: application/json\r\n",
                'method'  => 'POST',
                'content' => json_encode($data),
                'ignore_errors' => true
            ]
        ];

        // Enviando requisição para o reCAPTCHA Enterprise
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        if ($result === FALSE) {
            // Log de erro ao conectar
            error_log("Erro ao conectar à API do reCAPTCHA.");
            return false;
        }

        // Log da resposta da API
        $response = json_decode($result, true);

        // Verificando erros na resposta
        if (isset($response['error'])) {
            error_log("Erro na API do reCAPTCHA: " . json_encode($response['error']));
            return false;
        }

        // Verificando validade do token
        if (!isset($response['tokenProperties']['valid']) || !$response['tokenProperties']['valid']) {
            error_log("Token inválido ou expirado.");
            return false;
        }

        // Log do score recebido
        $score = $response['riskAnalysis']['score'] ?? 0;

        // Retornando a validação com base no score
        return $score > 0.5;
    }




    private function enviarEmail($nome, $telefone, $email, $assunto, $descricao)
    {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.titan.email';
            $mail->SMTPAuth = true;
            $mail->Username = 'franciel@tininhofita.com';
            $mail->Password = 'Tino7227!';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            $mail->CharSet = 'UTF-8';

            $mail->setFrom('franciel@tininhofita.com', 'Franciel Castilho');
            $mail->addAddress('franciel@tininhofita.com');

            $mail->isHTML(true);
            $mail->Subject = "Novo contato: $assunto";
            $mail->Body = "
            <h1>Novo Contato</h1>
            <p><strong>Nome:</strong> $nome</p>
            <p><strong>Telefone:</strong> $telefone</p>
            <p><strong>E-mail:</strong> $email</p>
            <p><strong>Assunto:</strong> $assunto</p>
            <p><strong>Descrição:</strong> $descricao</p>
            ";

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
