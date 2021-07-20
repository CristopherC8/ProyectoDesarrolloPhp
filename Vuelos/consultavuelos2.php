<html>
    <head>
        <title>Consulta de Vuelos</title>
    </head>

<body>
    <?php
        $conexionpia=mysqli_connect("localhost","root","","pia") or 
        die ("Conexion no establecida");
        $registros=mysqli_query($conexionpia,"select no_vuelo,plazas,fecha,id_avion,no_programa,destino,origen from vuelos where no_vuelo='$_REQUEST[vuelo]'") or
        die ("Vuelo inexistente : " . mysqli_error($conexionpia));

        if($reg = mysqli_fetch_array($registros)){
            echo "plazas: ". $reg['plazas']. "<br>";
            echo "fecha: ". $reg['fecha']. "<br>";
            echo "id_avion: ". $reg['id_avion'] . "<br>";
            echo "no_programa: ". $reg['no_programa']. "<br>";
            echo "destino: ". $reg['destino']. "<br>";
            echo "origen: ". $reg['origen']. "<br>";
        }else{
            echo "No existe el vuelo";
        }
        mysqli_close($conexionpia);
    ?>
</body>
</html>