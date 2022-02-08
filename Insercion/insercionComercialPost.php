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
        <a href="insercionComercial.php" class="active">Insertar nuevo Comercial</a>
        <a href="insercionProducto.php">Insertar nuevo Producto</a>
        <a href="insercionVenta.php" >Insertar nueva Venta</a>
    </div>
    <?php
        include "../controller.php";
        
        $codigo = $_POST["codigo"];
        $nombre = $_POST["nombre"];
        $salario = $_POST["salario"];
        $hijos = $_POST["hijos"];
        $fNacimiento = $_POST["fNacimiento"];

        $comercial = new Comercial($codigo, $nombre, $salario, $hijos, $fNacimiento);
        
        insercionSQLComercial($comercial);
    ?>
</body>
</html>