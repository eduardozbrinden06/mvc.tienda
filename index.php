<?php
require_once 'controllers/ProductoController.php';

$controlador = new ProductoController();

// Capturar la URL limpia o asignar una ruta por defecto

$url = !empty($_GET['url']) ? $_GET['url'] : '/mvc-tienda/'; // Ruta por defecto si no se proporciona ninguna
//$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';
$url = filter_var($url, FILTER_SANITIZE_URL);

// Dividir la URL en partes usando las barras '/'
// Ejemplo: "producto/ver/5" se convierte en ['producto', 'ver', '5']
$segmentos = explode('/', $url);

// Definir valores por defecto si la URL está vacía
$controladorNombre = !empty($segmentos[0]) ? $segmentos[0] : 'producto';
$accion = isset($segmentos[1]) ? $segmentos[1] : 'index';
$parametro = isset($segmentos[2]) ? $segmentos[2] : null;

// Enrutamiento basado en los segmentos obtenidos
if ($controladorNombre === 'producto') {
    if ($accion ==='ver' && $parametro !== null) {
        // Pasar el ID directamente si la acción es ver
        $controlador->ver(intval($parametro));
    } else {
        // Cargar catálogo general por defecto
        $controlador->index();
    }
} else {
    // Manejo de error 404 básico
    http_response_code(404);
    die("Página no encontrada.");
}

?>