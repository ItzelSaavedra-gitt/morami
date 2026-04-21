<?php
function menulateral(): string
{
  return '
    <nav class="mt-2"> 
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"> 

    <li class="nav-item">
      <a href="index.php?menu=usuarios&opc=registro" class="nav-link">
        <i class="nav-icon fas fa-users"></i>
        <p>Usuarios</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="index.php?menu=productos&opc=registro" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Productos</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="index.php?menu=inventario&opc=registro" class="nav-link">
        <i class="nav-icon fas fa-boxes"></i>
        <p>Inventario</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="index.php?menu=cotizaciones&opc=registro" class="nav-link">
        <i class="nav-icon fas fa-file-invoice"></i>
        <p>Cotizaciones</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="index.php?menu=pedidos&opc=registro" class="nav-link">
        <i class="nav-icon fas fa-shopping-cart"></i>
        <p>Pedidos</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="pedidos.html" class="nav-link">
        <i class="nav-icon fas fa-cog"></i>
        <p>Configuraciones generales</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="pantalla_principal.php" class="nav-link">
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>Cerrar sesión</p>
      </a>
    </li>

  </ul> 
</nav>
    ';
}