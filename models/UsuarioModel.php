<?php
class UsuarioModel {
    private $db;

    public function __construct($conexion) {
        $this->db = $conexion;
    }

    public function mostrar() {
        $sql = "SELECT * FROM usuarios ORDER BY id_usu_pk DESC";
        return $this->db->query($sql)->fetchAll();
    }

    public function insertar($nombre,$apellidoPaterno,$apellidoMaterno,$usuario,$contrasena ) {
        $sql = "INSERT INTO usuarios (nombre, apellidoPaterno, apellidoMaterno, usuario, contraseña) VALUES (?,?,?,?,?)";
        $resultado = $this->db->prepare($sql);
        return $resultado->execute([trim($nombre), trim($apellidoPaterno),trim($apellidoMaterno), trim($usuario), trim($contraseña)]);
    }

    public function eliminar($id_usu_pk) {
        $sql = "DELETE FROM usuarios WHERE id_usu_pk = ?";
        $resultado = $this->db->prepare($sql);
        return $resultado->execute([$id_usu_pk]);
    }

    public function mostrarPorId($id_usu_pk) {
        $sql = "SELECT * FROM usuarios WHERE id_usu_pk = ?";
        $resultado = $this->db->prepare($sql);
        $resultado->execute([$id_usu_pk]);
        return $resultado->fetch();
    }
    //utilizar el comando alter table para corregir Ñ en la contraseña y modificar en este codigo

    public function actualizar($id_usu_pk, $usuario,$contrasena) {
        $sql = "UPDATE usuarios SET  usuario = ?, contraseña =? WHERE id_usu_pk = ?";
        $resultado = $this->db->prepare($sql);
        return $resultado->execute([trim($usuario), trim($contrasena), $id_usu_pk]);
    }
}