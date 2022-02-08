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
            <a href="insercionProducto.php">Insertar nuevo Producto</a>
            <a href="insercionVenta.php"  class="active">Insertar nueva Venta</a>
        </div>
        <div>
        <form action="insercionVentaPost.php" method="post" class="finsert">
                <div>
                <label>Comercial:</label>
                <select name="selectorComercial" >
                <option value="">Seleccione:</option>
                <?php
include_once "../controller.php";
$sql = "SELECT nombre FROM Comerciales";
$data = consultaSQL($sql);

foreach ($data as $valores):
    echo '<option>' . $valores["nombre"] . '</option>';
endforeach;
?>
                </select>
                </div>
                <div>
                <label>Producto:</label>
                <select name="selectorProducto" >
                <option value="">Seleccione:</option>
                <?php
include_once "../controller.php";
$sql2 = "SELECT nombre FROM Productos";
$data2 = consultaSQL("SELECT nombre FROM Productos");

foreach ($data2 as $valores2):
    echo '<option>' . $valores2["nombre"] . '</option>';
endforeach;
?>
                </select>
                </div>
                <p><label>Cantidad: </label><input type="text" name="cantidad" required/></p>
                <div>                
                    <input type="submit" value="Enviar" name="enviar" class="btn">
                </div>
        </form>
        </div>
</body>
</html>