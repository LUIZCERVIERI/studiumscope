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

    public function cadastrar() {

        include "_cabecalho.php";
        include 'cadastro.php';
        include "_rodape.php";
        
    }

    public function index() {
        $this->login();
      
    }

    public function login(){

        include "_cabecalho.php";
        include 'login.php';
        include "_rodape.php";
        
    }

   public function salvar() {
        $pdo = getConnection();
        
        $nome = $_POST['nome'] ?? '';
        $email = $_POST['email'] ?? '';
        $senha = $_POST['senha'] ?? '';

        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
        
        header("Location: login.php");
    }

    public function sair() {
        session_destroy();
        header("Location: login.php");
        exit;
    
    }

}