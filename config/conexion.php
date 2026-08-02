<?php
class Conexion {
    public static function conectar() {
        $host = "localhost";
        $db   = "mvc_tienda";
        $user = "root"; // Cambia según tu configuración
        $pass = "";     // Cambia según tu configuración
       
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
?>