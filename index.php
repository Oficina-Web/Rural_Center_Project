<?php

include 'controller/rotasController.php';
include 'controller/usuariosController.php';

/**
 * parse_url => Pede 2 parametros, 1 a url que vai ser acessada, 2 a configuração(caminho)
 * _SERVER => Utilizando variaveis internas é possivel pegar o que sera acessado 
 */

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

# Navegação por Rotas
switch ($url) {
    case '/':
        RotasController::paginaInicial();
        break;
    case '/cadastro':
        RotasController::cadastro();
        break;
    case '/login':
        RotasController::login();
        break;
    case '/save':
        UsuariosController::cadastrarUsuario();
        break;
    default:
        echo 'Erro';
        break;
}
