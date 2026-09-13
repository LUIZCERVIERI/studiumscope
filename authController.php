<?php
require_once 'db.php';

$controller = new AuthController();

$acao = $_GET['acao'] ?? 'index';
switch ($acao) {
    case 'login':
        $controller->login();
        break;
    case 'cadastrar':
        $controller->cadastrar();
        break;
    case 'salvar':
        $controller->salvar();
        break;
    case 'sair':
        $controller->sair();
        break;
     default:
        $controller->index();
}
class AuthController {

    public function index() {
      
    }

    public function login(){
        
    }


    public function cadastrar() {
        
    }

    public function sair() {
    
    }


}