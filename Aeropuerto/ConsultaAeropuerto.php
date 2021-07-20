<html>
    <head>
        <title>Consulta de Aeropuertos</title>
    </head>

<body>
    <?php
        $conexionpia=mysqli_connect("localhost","root","","pia") or 
        die ("Conexion no establecida");
        $registros=mysqli_query($conexionpia,"select nombre,ciudad,pais from aeropuerto where codigo='$_REQUEST[Aeropuerto]'") or
        die ("Aeropuerto inexistente : " . mysqli_error($conexionpia));

        if($reg = mysqli_fetch_array($registros)){
            echo "Nombre: ". $reg['nombre']. "<br>";
            echo "Ciudad: ". $reg['ciudad']. "<br>";
            echo "Pais: ". $reg['pais'] . "<br>";
        }else{
            echo "No existe el aeropuerto";
        }
        mysqli_close($conexionpia);
    ?>
</body>
</html>