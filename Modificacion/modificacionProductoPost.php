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
            <a href="../Insercion/index.html">Inserción de Datos</a>
            <a href="index.html" class="active">Modificación de Datos</a>
            <a href="../Eliminacion/index.html">Eliminación de Datos</a>

        </div>

    </nav>
    <div class="horizontal-menu">
            <a href="modificacionComercial.php">Modificar un Comerciales</a>
            <a href="modificacionProductos.php" class="active">Modificar un Productos</a>
        </div>
    <table class="tabla">
        <th class="bg-primary" scope="col">Referencia</th>
        <th class="bg-primary" scope="col">Nombre</th>
        <th class="bg-primary" scope="col">Descripcion</th>
        <th class="bg-primary" scope="col">Precio</th>
        <th class="bg-primary" scope="col">Descuento</th>
        <?php
        
        if(isset($_POST["selector"])){
        include '../controller.php';
        $referencia = $_POST['selector'];
        $sql ="SELECT * FROM Productos
            WHERE referencia='".$referencia."'";
        $arrDatos = consultaSQL($sql);
        $referenciaVieja = $arrDatos[0]['referencia'];
        foreach ($arrDatos as $muestra) {
            echo '<tr>';
            echo '<td >' . $muestra['referencia'] . '</td>';
            echo '<td >' . $muestra['nombre'] . '</td>';
            echo '<td >' . $muestra['descripcion'] . '</td>';
            echo '<td >' . $muestra['precio'] . '</td>';
            echo '<td >' . $muestra['descuento'] . '</td>';
            echo ' </tr>';
        }
    }else{
        echo "Seleccione un Producto.";
    }
        ?>
    </table>
    <div>
        <form action="modificacionProductoPost2.php" method="post" class="finsert">
            <p>Nueva Referencia: <input type="text" name="referencia" required/></p>
            <p>Nuevo Nombre: <input type="text" name="nombre" required/></p>
            <p>Nueva Descripcion: <input type="text" name="descripcion" required/></p>
            <p>Nuevo Precio: <input type="text" name="precio" required/></p>
            <p>Nuevo Descuento: <input type="text" name="descuento" required/></p>
            <p><input type="submit" value="Enviar"/></p>
            <input   type='hidden' value="<?php echo $referenciaVieja?>" name='referenciaVieja'>
        </form>
    </div>  
</body>
</html>