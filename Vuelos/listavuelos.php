<html>
<head>
    <title>Lista de vuelos</title>
</head>

<body>
    <h3>Lista de vuelos</h3>
    <?php 
    $conexionpia=mysqli_connect("localhost","root","","pia") or die ("No se establecio conexion");
    $registros = mysqli_query($conexionpia, "select no_vuelo,plazas,fecha,id_avion,no_programa,destino,origen from vuelos") or
    die("No se mostraron los datos" . mysqli_error($conexionpia));

    while($fila=mysqli_fetch_array($registros)){
        echo "Numero de vuelo: " . $fila['no_vuelo']. "<br>";
        echo "plazas: ". $fila['plazas']. "<br>";
        echo "fecha: ". $fila['fecha']. "<br>";
        echo "id_avion: ". $fila['id_avion'] . "<br>";
        echo "no_programa: ". $fila['no_programa']. "<br>";
        echo "destino: ". $fila['destino']. "<br>";
        echo "origen: ". $fila['origen']. "<br>";
        echo "<hr>";
    }
    mysqli_close($conexionpia);
    ?>
</body>
</html>