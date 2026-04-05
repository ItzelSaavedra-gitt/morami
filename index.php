<?php
$menu=$_GET['menu'] ?? 'usuarios';
$opc=$_GET['opc'] ?? 'registro';

if ($menu=='usuarios'){
        switch ($opc){
            case 'index':
                include 'views/usuario.php';
                break;
            case 'registro':
                include 'views/registro_usu.php';
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