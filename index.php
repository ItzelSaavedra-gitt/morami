<?php
require_once 'config/database.php';
require_once 'controllers/UsuarioController.php';
require_once 'controllers/CotizacionController.php';
require_once 'functions.php';


$menu=$_GET['menu'] ?? 'usuarios';
$opc=$_GET['opc'] ?? 'index';

$db=new Database();
$conexion = $db->getConnection();//se abre la conexon a base de datos 



if ($menu=='usuarios'){
     $usuario=new UsuarioController($conexion);
        switch ($opc){
            case 'index':   
                $usuario-> index();
                break;
            case 'registro':
               $usuario->vistacrear(); 
                break;
        }
}
else if ($menu== 'productos')  {
    switch ($opc){
            case 'index':
                include 'views/productosregistrados.php';
                break;
            case 'registro':
                include 'views/registro_productos.php';
                break;
        }
} 
else if ($menu=='inventario')    {
    switch ($opc){
            case 'index':
                include 'views/inventario.php';
                break;
        }
}
else if ($menu=='cotizaciones'){
    switch ($opc){
            case 'index':
                include 'views/cotizacion.php';
                break;
            case 'registro':
                include 'views/registro_cotizaciones.php';
                break;
        }
}
else if ($menu=='pedidos'){
    switch ($opc){
            case 'index':
                include 'views/pedido.php';
                break;
            case 'registro':
                include 'views/registro_pedidos.php';
                break;
        }
}
?>