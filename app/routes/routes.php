<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../Router.php';

$router = new Router();

// ===========================
// Rotas de Visualização - Public
// ===========================

// Página: Home
$router->get('/', function () {
    include __DIR__ . '/../../views/home.php';
});

// Página: Home Antiga
$router->get('/antiga', function () {
    include __DIR__ . '/../../public/views/antes.php';
});


// ===========================
// Rotas de Visualização - Admin
// ===========================

// Página: login Admin
$router->get('/admin', function () {
    include __DIR__ . '/../../admin/index.php';
});

// ===========================
// Rotas de Autenticação
// ===========================

$router->post('/admin/auth/login', function () {
    require_once __DIR__ . '/../controllers/AuthController.php';
    $authController = new AuthController();
    $authController->login();
});

$router->get('/admin/auth/logout', function () {
    require_once __DIR__ . '/../controllers/AuthController.php';
    $authController = new AuthController();
    $authController->logout();
});


// ===========================
// Enviar E-mail
// ===========================

// Rota para enviar contato
$router->post('/contato/enviar', function () {
    try {

        require_once __DIR__ . '/../controllers/ContatoController.php';

        $controller = new ContatoController();

        $controller->enviarMensagem();  // Alterado de enviarContato para enviarMensagem
    } catch (Exception $e) {
        error_log("Erro na rota /contato/enviar: " . $e->getMessage());
        echo json_encode(['success' => false, 'message' => 'Erro interno do servidor']);
    }
});
