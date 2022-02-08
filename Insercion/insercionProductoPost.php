<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../CSS/style.css'>
    <title>SuperMercado MercaLidl</title>
</head>
<body>
    <nav>
        <div class="vertical-menu">
            <a href="../index.php">Inicio</a>
            <a href="..Consulta/index.html">Consulta de Datos</a>
            <a href="index.html" class="active">Inserción de Datos</a>
            <a href="../Modificacion/index.html">Modificación de Datos</a>
            <a href="../Eliminacion/index.html">Eliminación de Datos</a>
        </div>

    </nav>
    <div class="horizontal-menu">
        <a href="insercionComercial.php">Insertar nuevo Comercial</a>
        <a href="insercionProducto.php" class="active">Insertar nuevo Producto</a>
        <a href="insercionVenta.php" >Insertar nueva Venta</a>
    </div>
    <?php
        include "../controller.php";
        
        $referencia = $_POST["referencia"];
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $precio = $_POST["precio"];
        $descuento = $_POST["descuento"];

        $producto = new Producto($referencia, $nombre, $descripcion, $precio, $descuento);
        
        insercionSQLProducto($producto);
        
    ?>
</body>
</html>