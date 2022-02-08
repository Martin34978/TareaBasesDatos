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
            <a href="../Modificacion/index.html">Modificación de Datos</a>
            <a href="index.html" class="active">Eliminación de Datos</a>
        </div>

    </nav>
    <div class="horizontal-menu">
            <a href="eliminarComercial.php" >Eliminar un Comercial</a>
            <a href="eliminarProductos.php" class="active">Eliminar un Producto</a>
    </div>
    <form class="tabla" method="POST" action="eliminarProductoPost.php">
            <div>
            <label>Código:</label>
            <select name="selector" >
            <option value="">Seleccione:</option>
            
            <?php
            include "../controller.php";
            $sql="SELECT referencia FROM Productos";
            $data = consultaSQL($sql);
            
            foreach ($data as $valores):
            echo '<option>'.$valores["referencia"].'</option>';
            endforeach;
            
            ?>
            </select>
            </div>
            <input type="submit" value="Enviar" name="enviar" class="btn">
            </form>
</body>
</html>