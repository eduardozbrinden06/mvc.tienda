Este proyecto esta creado para aprender a utilizar un sistema con el patrón de arquitectura
modelo vista controlador (MVC) en PHP.

**# Versión 1.0**

- para empezar se crea una bd en mysql en su editor para luego hacer las conexiones
  atravez de PDO en la carpeta config, archivo conexion.php
- Se crean 3 carpetas y en cada carpeta se crean sus primeros archivos MVC
    (controllers/ProductoController.php
     models/ProductoModel.php
     views/lista.php y detalles.php)
- en la raiz se crea archivo index.php
- Se incluye el CSS compilado de Bootstrap, en las vistas.

- Definición: el usuario hace una petición la recibe el controlador este define que modelo
  del método llamar y luego decide que vista es adecuada para la respuesta.

Si lo ejecutamos en el navegador podremos ver los productos y sus detalles.

**# Versión 1.1.0**

en esta versión se configuran las URLs amigables

- se modifican archivos views/lista.php y, en la carpeta raiz el archivo index.php
- se agrega en la carpeta raiz el archivo .htaccess