<?php
require_once 'models/ProductosregistradosModel.php';

class ProductosregistradosController {
    private $modelo;
    
    public function __construct($conexion) {
        $this->modelo = new ProductosregistradosModel($conexion);
    }

    public function index(): void {
        $tabla = $this->modelo->mostrar();
        include 'views/productos.php';
    }

    public function vistacrear() {
        include 'views/registro_pro.php';
    }

    public function crear(): void {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre_pro'] ?? '';
            $color = $_POST['color_pro'] ?? '';
            $tipo = $_POST['tipo_pro'] ?? '';
            $formato = $_POST['formato_pro'] ?? '';
            $piezas = $_POST['CantidadPiezas_pro'] ?? 0;
            $unidad = $_POST['unidadMedida'] ?? '';
            $caducidad = $_POST['fechaCaducidad'] ?? null;
            $precio= $_POST['precioUnitario_pro'] ?? 0;

            if (!empty($nombre)) {
                $this->modelo->insertar($nombre, $color, $tipo, $formato, $piezas, $unidad, $caducidad, $precio);
            }
            header("Location: index.php?menu=productos&opc=index");
            exit;
        }
    }

    public function borrar(int $id): void {
        if ($id) {
            $this->modelo->eliminar($id);
        }
        header("Location: index.php?menu=productos&opc=index");
        exit;
    }

    public function editar(int $id): void {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre    = $_POST['nombre_pro'] ?? '';
            $color     = $_POST['color_pro'] ?? '';
            $tipo      = $_POST['tipo_pro'] ?? '';
            $formato   = $_POST['formato_pro'] ?? '';
            $piezas    = $_POST['CantidadPiezas_pro'] ?? 0;
            $unidad    = $_POST['unidadMedida'] ?? '';
            $caducidad = $_POST['fechaCaducidad'] ?? null;
            $precio    = $_POST['precioUnitario_pro'] ?? 0;

            $this->modelo->actualizar($id, $nombre, $color, $tipo, $formato, $piezas, $unidad, $caducidad, $precio);

            header("Location: index.php?menu=productos&opc=index");
            exit;
        }

        $producto = $this->modelo->mostrarPorId($id);
        if (!$producto) {
            header("Location: index.php?menu=productos&opc=index");
            exit;
        }
    
        include 'views/editProducto.php';
    }
}
?>