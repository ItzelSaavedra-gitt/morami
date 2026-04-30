<?php
require_once 'models/UsuarioModel.php';

class VerificarController {
    private $modelo;
    
    public function __construct($conexion) {
        $this->modelo = new UsuarioModel($conexion);
    }

    public function index(): void {
        include 'views/login.php';
    }

    public function verificar() {
        $usuario= $_POST ['txtusuario'];
        $contrasenia = $_POST['txtcontrasenia'];
      $resultado=$this->modelo->validar($usuario,$contrasenia);
      if($resultado){
        header('Location: ? menu=panel&id='.$resultado['id_usu_pk']);
      }else{
        header ('Location: ? menu=login&opc=index');
      }
    }
}
?>