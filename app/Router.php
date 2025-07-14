<?php

class Router
{
    private $routes = [];

    // Registra uma rota GET
    public function get($path, $callback)
    {
        $this->routes['GET'][$path] = $callback;
    }

    // Registra uma rota POST
    public function post($path, $callback)
    {
        $this->routes['POST'][$path] = $callback;
    }

    // Despacha a requisição para a rota correspondente
    public function dispatch()
    {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $requestUri = $_SERVER['REQUEST_URI'];
        // Remove query string da URL
        $requestUri = explode('?', $requestUri)[0];
        // Verifica se a rota existe
        if (isset($this->routes[$requestMethod][$requestUri])) {
            // $this->logError("Rota encontrada: {$requestUri}");
            call_user_func($this->routes[$requestMethod][$requestUri]);
        } else {
            // $this->logError("Rota não encontrada: {$requestUri}");
            http_response_code(404);
            echo "Página não encontrada!";
        }
    }
}
