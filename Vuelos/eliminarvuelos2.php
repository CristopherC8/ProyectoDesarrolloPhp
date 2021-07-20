<html>
    <head>
        <title>Eliminar Vuelos</title>
    </head>

<body>
    <?php
    $conexionpia=mysqli_connect("localhost","root","","pia") or die ("Falla la conexion");
    $registros = mysqli_query($conexionpia,"select no_vuelo from vuelos where no_vuelo ='$_REQUEST[vuelo]'") or
    die ("Falla en el select" . mysqli_error($conexionpia));

    if($reg=mysqli_fetch_array($registros)){
        mysqli_query($conexionpia, "delete from vuelos where no_vuelo='$_REQUEST[vuelo]'") or 
        die ("Falla en el delete" . mysqli_error($conexionpia));
        echo "vuelo eliminado";
    }else{
        echo "Registro no encontrado";
    }
    mysqli_close($conexionpia);
    ?>
</body>
</html>