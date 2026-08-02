<?php
require_once 'controllers/ProductoController.php';

$controlador = new ProductoController();

// Leer la acción solicitada por el usuario (por defecto será 'index')
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Enrutamiento dinámico básico
if ($action === 'ver' && isset($_GET['id'])) {
    $controlador->ver(intval($_GET['id']));
} else {
    $controlador->index();
}
?>