<?php
require_once __DIR__ . '/../../db.php';

$controller = new TrabalhosController();

$acao = $_GET['acao'] ?? 'index';
switch ($acao) {
    
     default:
        $controller->index();
}
class TrabalhosController {

    public function index() {
        
        include __DIR__ . "/../../_cabecalho.php";
        include "lista.php";
        include __DIR__ . "/../../_rodape.php";
      
    }


}