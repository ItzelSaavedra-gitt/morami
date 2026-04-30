<?php
require_once 'models/UsuarioModel.php';

class PanelController {
    private $modelo;
    
    public function __construct($conexion) {
        $this->modelo = new UsuarioModel($conexion);
    }

    public function index(): void {
        $id=$_GET['id'];
        $resultado=$this->modelo ->mostrarPorId ($id);
        include 'views/panel.php';
    }
}
?>