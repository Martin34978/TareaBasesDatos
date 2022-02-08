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
            <a href="../Consulta/index.html">Consulta de Datos</a>
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
    <div>
        <form action="insercionProductoPost.php" method="post" class="finsert">
            <p>Referencia: <input type="text" name="referencia" required/></p>
            <p>Nombre: <input type="text" name="nombre" required/></p>
            <p>Descripción: <input type="text" name="descripcion" required/></p>
            <p>Precio: <input type="text" name="precio" required/></p>
            <p>Descuento: <input type="text" name="descuento" required/></p>
            <p><input type="submit" value="Enviar" /></p>
        </form>
    </div>
</body>
</html>