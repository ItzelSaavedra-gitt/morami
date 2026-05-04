<?php
require_once 'config/database.php';
require_once 'controllers/UsuarioController.php';
require_once 'functions.php';
require_once 'controllers/VerificarController.php';
require_once 'controllers/PanelController.php';

$menu=$_GET['menu'] ?? 'principal';
$opc=$_GET['opc'] ?? 'index';

$db=new Database();
$conexion = $db->getConnection();//se abre la conexon a base de datos 

if ($menu=='principal'){
     include 'views/pantalla_principal.php';
  
}else if($menu=='login'){
    $verificar=new VerificarController($conexion);
        switch ($opc){
            case 'index':   
                $verificar-> index();
                break;
            case 'verificar':
               $verificar->verificar(); 
                break;
        }
}
else if ($menu=='panel'){
    $panel = new PanelController($conexion);
     switch ($opc){
            case 'index':   
                $panel-> index();
                break;
        }
  
}else if ($menu=='usuarios'){
     $usuario=new UsuarioController($conexion);
        switch ($opc){
            case 'index':   
                $usuario-> index();
                break;
            case 'registro':
               $usuario->vistacrear(); 
                break; 
              $usuario->actualizar($id);
            break;
            $usuario->agregar($id);
            break;
        case 'editar': 
            $usuario->editar($id);
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