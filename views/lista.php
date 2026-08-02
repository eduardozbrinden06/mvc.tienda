<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuestra Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container my-5">
        <h1 class="text-center mb-4">Catálogo de Productos</h1>
        <div class="row g-4">
            <?php foreach ($productos ?? [] as $p): ?>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($p['nombre']); ?></h5>
                            <p class="text-primary fw-bold">$<?php echo number_format($p['precio'], 2); ?></p>
                            <a href="index.php?action=ver&id=<?php echo $p['id']; ?>" class="btn btn-outline-primary w-100">
                                Ver Detalles
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>