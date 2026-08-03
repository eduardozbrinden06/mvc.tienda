<?php
require_once 'config/conexion.php';

class ProductoModel {
    private PDO $db;

    public function __construct() {
        $this->db = Conexion::conectar();
    }

    // Obtiene todos los productos de la tabla
    public function obtenerTodos() {
        $stmt = $this->db->query("SELECT * FROM productos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtiene un solo producto por su ID único
    public function obtenerPorId(int $id) {
        $stmt = $this->db->prepare("SELECT * FROM productos WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>