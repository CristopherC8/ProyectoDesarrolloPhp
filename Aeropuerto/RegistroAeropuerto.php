<html>
<head>
    <title>Lista de aeropuertos</title>
</head>

<body>
    <h3>Lista de aeropuertos</h3>
    <?php 
    $conexionpia=mysqli_connect("localhost","root","","pia") or die ("No se establecio conexion");
    $registros = mysqli_query($conexionpia, "select codigo,nombre,ciudad,pais from aeropuerto") or
    die("No se mostraron los datos" . mysqli_error($conexionpia));

    while($fila=mysqli_fetch_array($registros)){
        echo "Codigo: " . $fila['codigo']. "<br>";
        echo "Nombre: ". $fila['nombre']. "<br>";
        echo "Ciudad: ". $fila['ciudad']. "<br>";
        echo "Pais: ". $fila['pais']. "<br>";
        echo "<hr>";
    }
    mysqli_close($conexionpia);
    ?>
</body>
</html>