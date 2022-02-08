<?php

/*Función que consulta la BD(TCP/IP), devuelve un array cuya clave-valor son 
las tupas de la tabla*/
function consultaSQL($sql){
$host = "127.0.0.1";
$dbname = "ventas_comerciales";
$username = "dwes";
$password = "dwes";
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $busqueda = $conn->query($sql);
        $arrDatos = $busqueda->fetchAll(PDO::FETCH_ASSOC);       
    } catch (PDOException $e) {
        die("No se pudo conectar con $dbname :" . $e->getMessage());
    }  
    
    return $arrDatos;
    $conn->closeCursor();
    $conn = null;
    $busqueda = null;  
}

/*Inserta un nuevo comercial en la tabla Comerciales, recibe de
entrada un objeto de la clase Comercial, definida más abajo */
function insercionSQLComercial($comercial){
    $host = "127.0.0.1";
    $dbname = "ventas_comerciales";
    $username = "dwes";
    $password = "dwes";
        try {

            $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $stm = $conn->prepare("INSERT INTO Comerciales (codigo, nombre, salario, hijos, fNacimiento) 
                                    VALUES (:codigo, :nombre, :salario, :hijos, :fNacimiento)");
            $stm->execute((array) $comercial);
            echo "Nuevo Comercial agregado con éxito.";
        } catch (PDOException $e) {
            die("No se pudo conectar con $dbname :" . $e->getMessage());
        }
    
    //$conn->closeCursor();
    $conn = null;
    $stm = null;   
}



/*Inserta un nuevo producto en la tabla Producto, recibe de
entrada un objeto de la clase Producto, definida más abajo */
function insercionSQLProducto($producto){
    $host = "127.0.0.1";
    $dbname = "ventas_comerciales";
    $username = "dwes";
    $password = "dwes";
        try {

            $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $stm = $conn->prepare("INSERT INTO Productos (referencia, nombre, descripcion, precio, descuento) 
                                    VALUES (:referencia, :nombre, :descripcion, :precio, :descuento)");
            $stm->execute((array) $producto);
            echo "Nuevo Producto agregado con éxito.";
        } catch (PDOException $e) {
            die("No se pudo conectar con $dbname :" . $e->getMessage());
        }
    
    //$conn->closeCursor();
    $conn = null;
    $stm = null; 
}


/*Inserta una nueva venta en la tabla Ventas, recibe de
entrada un objeto de la clase Venta, definida más abajo */
function insercionSQLVenta($venta){
    $host = "127.0.0.1";
    $dbname = "ventas_comerciales";
    $username = "dwes";
    $password = "dwes";
        try {

            $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $stm = $conn->prepare("INSERT INTO Ventas (codComercial, refProducto, cantidad, fecha) 
                                    VALUES (:codComercial, :refProducto, :cantidad, :fecha)");
            $stm->execute((array) $venta);
            echo "Nueva Venta agregada con éxito.";
        } catch (PDOException $e) {
            die("No se pudo conectar con $dbname :" . $e->getMessage());
        }
    
    //$conn->closeCursor();
    $conn = null;
    $stm = null; 
}


/*Modifica un comercial de la tabla Comerciales, recibe de
entrada un objeto de la clase Comercial, definida más abajo 
Para que funcionara debí cambiar el script de cración de la BD y añadir 
CASCADE UPDATE a las llaves foraneas de Ventas*/

function modificacionSQLComercial($comercial, $codigoViejo){
    $host = "127.0.0.1";
    $dbname = "ventas_comerciales";
    $username = "dwes";
    $password = "dwes";
        try {

            $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $stm = $conn->prepare("UPDATE Comerciales
                                SET codigo = :codigo,
                                nombre = :nombre,
                                salario = :salario,
                                hijos = :hijos,
                                fNacimiento = :fNacimiento 
                                WHERE codigo =  '".$codigoViejo."'");

            
            $stm->execute((array) $comercial);
            echo "Comercial modificado con éxito.";
        } catch (PDOException $e) {
            die("No se pudo conectar con $dbname :" . $e->getMessage());
        }
    
    //$conn->closeCursor();
    $conn = null;
    $stm = null; 
}

/*Modifica un comercial de la tabla Comerciales, recibe de
entrada un objeto de la clase Comercial, definida más abajo 
Para que funcionara debí cambiar el script de cración de la BD y añadir 
CASCADE UPDATE a las llaves foraneas de Ventas*/

function modificacionSQLProducto($producto, $referenciaVieja){
    $host = "127.0.0.1";
    $dbname = "ventas_comerciales";
    $username = "dwes";
    $password = "dwes";
        try {

            $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $stm = $conn->prepare("UPDATE Productos
                                SET referencia = :referencia,
                                nombre = :nombre,
                                descripcion = :descripcion,
                                precio = :precio,
                                descuento = :descuento 
                                WHERE referencia = '".$referenciaVieja."'");

            
            $stm->execute((array) $producto);
            echo "Producto modificado con éxito.";
        } catch (PDOException $e) {
            die("No se pudo conectar con $dbname :" . $e->getMessage());
        }
    
    //$conn->closeCursor();
    $conn = null;
    $stm = null; 
}

/* Funcion que elimina un registro de la tabla Comerciales. Recibe por parámetro
el código del comercial a eliminar*/ 
function eliminacionSQLComercial($codComercial){
    $host = "127.0.0.1";
    $dbname = "ventas_comerciales";
    $username = "dwes";
    $password = "dwes";
        try {

            $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $stm = $conn->prepare("DELETE FROM Comerciales WHERE codigo = $codComercial");
            $stm->execute();
            echo "Comercial $codComercial eliminado con éxito.";
        } catch (PDOException $e) {
            die("No se pudo conectar con $dbname :" . $e->getMessage());
        }
    
    //$conn->closeCursor();
    $conn = null;
    $stm = null;   
}

/* Funcion que elimina un registro de la tabla Producto. Recibe por parámetro
la referencia del producto a eliminar*/ 
function eliminacionSQLProducto($referencia){
    $host = "127.0.0.1";
    $dbname = "ventas_comerciales";
    $username = "dwes";
    $password = "dwes";
        try {

            $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $stm = $conn->prepare("DELETE FROM Productos WHERE referencia = '".$referencia."'");
            $stm->execute();
            echo "Producto $referencia eliminado con éxito.";
        } catch (PDOException $e) {
            die("No se pudo conectar con $dbname :" . $e->getMessage());
        }
    
    //$conn->closeCursor();
    $conn = null;
    $stm = null;   
}

/* Definición de las clases que usan las funciones para mapear las clave/valor 
    necesarias para ingresarlas en la base de datos*/
class Comercial{
    public $codigo;
    public $nombre;
    public $salario;
    public $hijos;
    public $fNacimiento;

    public function __construct($codigo, $nombre, $salario, $hijos, $fNacimiento){
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->salario = $salario;
        $this->hijos = $hijos;
        $this->fNacimiento = $fNacimiento;
    }
}

class Producto{
    public $referencia;
    public $nombre;
    public $descripcion;
    public $precio;
    public $descuento;

    public function __construct($referencia, $nombre, $descripcion, $precio, $descuento){
        $this->referencia = $referencia;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->descuento = $descuento;
    }
}

class Venta{
    public $codComercial;
    public $refProducto;
    public $cantidad;
    public $fecha;

    public function __construct($codComercial, $refProducto, $cantidad, $fecha){
        $this->codComercial = $codComercial;
        $this->refProducto = $refProducto;
        $this->cantidad = $cantidad;
        $this->fecha = $fecha;
    }
}
?>