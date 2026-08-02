<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php
    // Evitar error de variable indefinida
    if (!isset($producto) || !is_array($producto)) {
        $producto = [
            'nombre' => 'Producto',
            'descripcion' => 'Descripción no disponible.',
            'precio' => 0
        ];
    }
    ?>
    <title><?php echo htmlspecialchars($producto['nombre']); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container my-5" style="max-width: 600px;">
        <div class="card shadow">
            <div class="card-body">
                <h1 class="card-title h2 mb-3"><?php echo htmlspecialchars($producto['nombre']); ?></h1>
                <p class="card-text text-muted mb-4"><?php echo htmlspecialchars($producto['descripcion']); ?></p>
                <h3 class="text-success mb-4">$<?php echo number_format($producto['precio'], 2); ?></h3>
                <a href="index.php" class="btn btn-secondary">Volver al Catálogo</a>
            </div>
        </div>
    </div>
</body>
</html>