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
            <a href="index.html" class="active">Consulta de Datos</a>
            <a href="../Insercion/index.html">Inserción de Datos</a>
            <a href="../Modificacicon/index.html">Modificación de Datos</a>
            <a href="../Eliminacion/index.html">Eliminación de Datos</a>

        </div>

    </nav>
    <div class="horizontal-menu">
            <a href="consultaComerciales.php" >Consultar todos los Comerciales</a>
            <a href="consultaVentasComercial.php">Consulta un Comercial en concreto</a>
            <a href="consultaProductos.php" class="active">Consultar todos los Productos</a>
            <a href="consultaVentas.php">Consultar todas las Ventas</a>
        </div>
    <table class="tabla">
        <th class="bg-primary" scope="col">Referencia</th>
        <th class="bg-primary" scope="col">Nombre</th>
        <th class="bg-primary" scope="col">Descripción</th>
        <th class="bg-primary" scope="col">Precio</th>
        <th class="bg-primary" scope="col">Descuento</th>
        <?php
        include '../controller.php';
        $sql ="SELECT * FROM Productos";
        $arrDatos = consultaSQL($sql);
    
        foreach ($arrDatos as $muestra) {
            echo '<tr>';
        
            echo '<td >' . $muestra['referencia'] . '</td>';
            echo '<td >' . $muestra['nombre'] . '</td>';
            echo '<td >' . $muestra['descripcion'] . '</td>';
            echo '<td >' . $muestra['precio'] . '</td>';
            echo '<td >' . $muestra['descuento'] . '</td>';
        
            echo ' </tr>';
        
        }
        ?>
    
    </table>  
</body>
</html>