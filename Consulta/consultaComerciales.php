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
            <a href="../Eliminacion/index.html">Eliminación de Datos</a>

        </div>

    </nav>
    <div class="horizontal-menu">
            <a href="consultaComerciales.php" class="active">Consultar todos los Comerciales</a>
            <a href="consultaVentasComercial.php">Consulta un Comercial en concreto</a>
            <a href="consultaProductos.php" >Consultar todos los Productos</a>
            <a href="consultaVentas.php">Consultar todas las Ventas</a>
        </div>
    <table class="tabla">
        <th class="bg-primary" scope="col">Código</th>
        <th class="bg-primary" scope="col">Nombre</th>
        <th class="bg-primary" scope="col">Salario</th>
        <th class="bg-primary" scope="col">Hijos</th>
        <th class="bg-primary" scope="col">Fecha de Nacimiento</th>
        <?php
        include '../controller.php';
        $sql ="SELECT * FROM Comerciales";
        $arrDatos = consultaSQL($sql);
    
        foreach ($arrDatos as $muestra) {
            echo '<tr>';
        
            echo '<td >' . $muestra['codigo'] . '</td>';
            echo '<td >' . $muestra['nombre'] . '</td>';
            echo '<td >' . $muestra['salario'] . '</td>';
            echo '<td >' . $muestra['hijos'] . '</td>';
            echo '<td >' . $muestra['fNacimiento'] . '</td>';
        
            echo ' </tr>';
        
        }
        ?>
    
    </table>  
</body>
</html>