<?php
class CotizacionModel {
    private $db;

    public function __construct($conexion) {
        $this->db = $conexion;
    }

    public function mostrar() {
        $sql = "SELECT * FROM cotizaciones ORDER BY id_cot_pk DESC";
        return $this->db->query($sql)->fetchAll();
    }

    public function insertar($fecha, $total, $vencimiento, $id_cliente, $id_usuario) {
        $sql = "INSERT INTO cotizaciones (fecha_cot, total_cot, fechaVencimiento_cot, id_cli_pk, id_usu_pk) VALUES (?,?,?,?,?)";
        $resultado = $this->db->prepare($sql);
        return $resultado->execute([$fecha, $total, $vencimiento, $id_cliente, $id_usuario]);
    }

    public function eliminar($id_cot_pk) {
        $sql = "DELETE FROM cotizaciones WHERE id_cot_pk = ?";
        $resultado = $this->db->prepare($sql);
        return $resultado->execute([$id_cot_pk]);
    }

    public function mostrarPorId($id_cot_pk) {
        $sql = "SELECT * FROM cotizaciones WHERE id_cot_pk = ?";
        $resultado = $this->db->prepare($sql);
        $resultado->execute([$id_cot_pk]);
        return $resultado->fetch();
    }

    public function actualizar($id_cot_pk, $fecha, $total, $vencimiento, $id_cliente) {
        $sql = "UPDATE cotizaciones SET fecha_cot = ?, total_cot = ?, fechaVencimiento_cot = ?, id_cli_pk = ? WHERE id_cot_pk = ?";
        $resultado = $this->db->prepare($sql);
        return $resultado->execute([$fecha, $total, $vencimiento, $id_cliente, $id_cot_pk]);
    }
}
?>