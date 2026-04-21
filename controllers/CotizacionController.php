<?php
require_once 'models/CotizacionModel.php';

class CotizacionController {
    private $modelo;
    
    public function __construct($conexion) {
        $this->modelo = new CotizacionModel($conexion);
    }

    public function index(): void {
        $tabla = $this->modelo->mostrar();
        include 'views/cotizacion.php';
    }

    public function vistacrear() {
       
        include 'views/registro_cotizaciones.php';
    }

    public function crear(): void {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fecha = $_POST['fecha_cot'] ?? '';
            $total = $_POST['total_cot'] ?? 0;
            $vencimiento = $_POST['fechaVencimiento_cot'] ?? '';
            $id_cliente = $_POST['id_cli_pk'] ?? '';
            $id_usuario = $_SESSION['id_usuario'] ?? 1; 

            if (!empty($fecha) && !empty($id_cliente)) {
                $this->modelo->insertar($fecha, $total, $vencimiento, $id_cliente, $id_usuario);
            }
            header("Location: index.php?menu=cotizaciones&opc=index");
            exit;
        }
    }

    public function borrar(int $id): void {
        if ($id) {
            $this->modelo->eliminar($id);
        }
        header("Location: index.php?menu=cotizaciones&opc=index");
        exit;
    }

    public function editar(int $id): void {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fecha = $_POST['fecha_cot'] ?? '';
            $total = $_POST['total_cot'] ?? 0;
            $vencimiento = $_POST['fechaVencimiento_cot'] ?? '';
            $id_cliente = $_POST['id_cli_pk'] ?? '';

            $this->modelo->actualizar($id, $fecha, $total, $vencimiento, $id_cliente);
            
            header("Location: index.php?menu=cotizaciones&opc=index");
            exit;
        }

        $cotizacion = $this->modelo->mostrarPorId($id);
        if (!$cotizacion) {
            header("Location: index.php?menu=cotizaciones&opc=index");
            exit;
        }
    
        include 'views/editCotizacion.php';
    }
}
?>