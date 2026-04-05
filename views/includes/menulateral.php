<?php
function menulateral (): string{
    return "
    <li class='nav-item'>
            <a href='index.php?menu=usuarios&opc=registro' class='nav-link'>
              <i class='nav-icon fas fa-users'></i>
              <p>Usuarios </p>
            </a>
          </li>

          <li class='nav-item'>
            <a href='index.php?menu=productos&opc=registro' class='nav-link active'>
              <i class='nav-icon fas fa-tachometer-alt'></i>
              <p>Productos </p>
            </a>
          </li>

          <li class='nav-item'>
            <a href='index.php?menu=inventario&opc=registro' class='nav-link'>
              <i class='nav-icon fas fa-boxes'></i>
              <p> Inventario</p>
            </a>
          </li>


          <li class='nav-item'>
            <a href='index.php?menu=cotizaciones&opc=registro' class='nav-link'>
              <i class='nav-icon fas fa-file-invoice'></i>
              <p> Cotizaciones</p>
            </a>
          </li>

          <li class='nav-item'>
            <a href='index.php?menu=pedidos&opc=registro' class='nav-link'>
              <i class='nav-icon fas fa-shopping-cart'></i>
              <p> Pedidos </p>
            </a>
          </li>

        <li class='nav-item'>
         <a href='pedidos.html' class='nav-link'>
          <i class='nav-icon fas fa-cog'></i>
           <p>Configuraciones generales</p>
          </a>
        </li>
    ";
}
?>