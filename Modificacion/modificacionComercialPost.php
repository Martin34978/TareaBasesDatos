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
            <a href="modificacionComerciales.php" class="active">Modificar un Comerciales</a>
            <a href="modificacionProductos.php" >Modificar un Productos</a>
        </div>
    <table class="tabla">
        <th class="bg-primary" scope="col">Código</th>
        <th class="bg-primary" scope="col">Nombre</th>
        <th class="bg-primary" scope="col">Salario</th>
        <th class="bg-primary" scope="col">Hijos</th>
        <th class="bg-primary" scope="col">Fecha de Nacimiento</th>
        <?php
        
        if(isset($_POST["selector"])){
        include '../controller.php';
        $nombre = $_POST['selector'];
        $sql ="SELECT * FROM Comerciales
            WHERE nombre='".$nombre."'";
        $arrDatos = consultaSQL($sql);
        $codigo = $arrDatos[0]['codigo'];
        foreach ($arrDatos as $muestra) {
            echo '<tr>';
            echo '<td >' . $muestra['codigo'] . '</td>';
            echo '<td >' . $muestra['nombre'] . '</td>';
            echo '<td >' . $muestra['salario'] . '</td>';
            echo '<td >' . $muestra['hijos'] . '</td>';
            echo '<td >' . $muestra['fNacimiento'] . '</td>';
            echo ' </tr>';
        }
    }else{
        echo "Seleccione un Comercial.";
    }
        ?>
    </table>
    <div>
        <form action="modificacionComercialPost2.php" method="post" class="finsert">
            <p>Nuevo Código: <input type="text" name="codigo" required/></p>
            <p>Nuevo Nombre: <input type="text" name="nombre" required/></p>
            <p>Nuevo Salario: <input type="text" name="salario" required/></p>
            <p>Nuevos Hijos: <input type="text" name="hijos" required/></p>
            <p>Nueva Fecha de Nacimiento: <input type="text" name="fNacimiento" required/></p>
            <p><input type="submit" value="Enviar"/></p>
            <input   type='hidden' value="<?php echo $codigo?>" name='codigoViejo'>
        </form>
    </div>  
</body>
</html>