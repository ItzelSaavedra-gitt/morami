<?php
class ProductosregistradosModel {
    private $db;

    public function __construct($conexion) {
        $this->db = $conexion;
    }

    public function mostrar() {
        $sql = "SELECT * FROM productos ORDER BY id_pro_pk DESC";
        return $this->db->query($sql)->fetchAll();
    }

    public function insertar($nombre, $color, $tipo, $formato, $piezas, $unidad, $caducidad, $precio) {
        $sql = "INSERT INTO productos (nombre_pro, color_pro, tipo_pro, formato_pro, CantidadPiezas_pro, unidadMedida, fechaCaducidad, precioUnitario_pro) VALUES (?,?,?,?,?,?,?,?)";
        $resultado = $this->db->prepare($sql);
        return $resultado->execute([
            trim($nombre), trim($color), trim($tipo), trim($formato), 
            $piezas, trim($unidad), $caducidad, $precio
        ]);
    }

    public function eliminar($id_pro_pk) {
        $sql = "DELETE FROM productos WHERE id_pro_pk = ?";
        $resultado = $this->db->prepare($sql);
        return $resultado->execute([$id_pro_pk]);
    }

    public function mostrarPorId($id_pro_pk) {
        $sql = "SELECT * FROM productos WHERE id_pro_pk = ?";
        $resultado = $this->db->prepare($sql);
        $resultado->execute([$id_pro_pk]);
        return $resultado->fetch();
    }

    public function actualizar($id_pro_pk, $nombre, $color, $tipo, $formato, $piezas, $unidad, $caducidad, $precio) {
        $sql = "UPDATE productos SET nombre_pro = ?, color_pro = ?, tipo_pro = ?, formato_pro = ?, CantidadPiezas_pro = ?, unidadMedida = ?, fechaCaducidad = ?, precioUnitario_pro = ? WHERE id_pro_pk = ?";
        $resultado = $this->db->prepare($sql);
        return $resultado->execute([
            trim($nombre), trim($color), trim($tipo), trim($formato), 
            $piezas, trim($unidad), $caducidad, $precio, $id_pro_pk
        ]);
    }
}
?>