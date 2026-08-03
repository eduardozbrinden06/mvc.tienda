<?php
require_once 'models/ProductoModel.php';

class ProductoController {
    private ProductoModel $modelo;

    public function __construct() {
        $this->modelo = new ProductoModel();
    }

    // Acción para ver el catálogo general
    public function index() {
        $productos = $this->modelo->obtenerTodos();
        require_once 'views/lista.php';
    }

    // Acción para ver la ficha técnica de un producto
    public function ver(int $id) {
        $producto = $this->modelo->obtenerPorId($id);
       
        if (!$producto) {
            die("El producto solicitado no existe.");
        } else {
            require_once 'views/detalle.php';
        }   
       
        //require_once 'views/detalle.php';
    }
}
?>