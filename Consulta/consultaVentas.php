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
            <a href="../Modificacion/index.html">Modificación de Datos</a>
            <a href="../Eliminacion/eliminacion.html">Eliminación de Datos</a>

        </div>

    </nav>
    <div class="horizontal-menu">
            <a href="consultaComerciales.php" >Consultar todos los Comerciales</a>
            <a href="consultaVentasComercial.php">Consulta un Comercial en concreto</a>
            <a href="consultaProductos.php">Consultar todos los Productos</a>
            <a href="consultaVentas.php" class="active">Consultar todas las Ventas</a>
        </div>
    <table class="tabla">
        <th class="bg-primary" scope="col">Código Comercial</th>
        <th class="bg-primary" scope="col">Referencia Producto</th>
        <th class="bg-primary" scope="col">Cantidad</th>
        <th class="bg-primary" scope="col">Fecha</th>
        <?php
        include '../controller.php';
        $sql ="SELECT * FROM Ventas";
        $arrDatos = consultaSQL($sql);
    
        foreach ($arrDatos as $muestra) {
            echo '<tr>';
        
            echo '<td >' . $muestra['codComercial'] . '</td>';
            echo '<td >' . $muestra['refProducto'] . '</td>';
            echo '<td >' . $muestra['cantidad'] . '</td>';
            echo '<td >' . $muestra['fecha'] . '</td>';

            echo ' </tr>';
        
        }
        ?>
    
    </table>  
</body>
</html>