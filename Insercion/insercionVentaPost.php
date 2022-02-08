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
        <?php
        if($_POST["selectorComercial"] != null && $_POST["selectorProducto"] != null ){
            include '../controller.php';
            
            $nombre=$_POST["selectorComercial"];
            $sqlCodigo = "SELECT codigo FROM Comerciales WHERE nombre='".$nombre."'";
            $arrCodigo = consultaSQL($sqlCodigo);
            $codigo = implode($arrCodigo[0]);

            $nombreProducto = $_POST["selectorProducto"];
            $sqlReferencia = "SELECT referencia FROM Productos WHERE nombre='".$nombreProducto."'";
            $arrReferencia = consultaSQL($sqlReferencia);
            $referencia = implode($arrReferencia[0]);

            $cantidad=$_POST["cantidad"];
            $fecha=getdate();
            $fechaFormateada = $fecha['year']."-".$fecha['mon']."-".$fecha['mday'];
            $venta = new Venta($codigo, $referencia, $cantidad, $fechaFormateada);
            
            insercionSQLVenta($venta);
        }else{
            echo "Debe seleccionar un Comercial y un Producto.";
        }       
            
        ?>
</body>
</html>