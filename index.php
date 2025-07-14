<?php

// Define a URL base do projeto (no Virtual Host, public já é a raiz)
define('BASE_URL', '/');

// Define a constante BASE_PATH para facilitar o acesso às pastas
define('BASE_PATH', __DIR__);

// Encaminha todas as requisições para o router.php
try {
    require_once __DIR__ . '/app/Router.php';
    // Instancia o roteador
    $router = new Router();
    // Inclui o arquivo de rotas
    require_once __DIR__ . '/app/routes/routes.php';
    // Despacha as rotas
    $router->dispatch();
} catch (Exception $e) {
    echo "Erro ao carregar o Router.";
    exit;
}
