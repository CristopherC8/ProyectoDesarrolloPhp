<html>
<head>
    <title>Agregar Vuelo</title>
</head>

<body>
    <?php
    $conexionpia=mysqli_connect("localhost","root","","pia") or die("No se encontro la conexion");
    mysqli_query($conexionpia,"INSERT INTO vuelos(plazas, fecha, id_avion, no_programa, destino, origen)
     VALUES ('$_REQUEST[plazas]','$_REQUEST[fecha]','$_REQUEST[id_avion]','$_REQUEST[no_programa]'
     ,'$_REQUEST[destino]','$_REQUEST[origen]')")
     or die ("no se agrego vuelo" . mysqli_error($conexionpia));

     mysqli_close($conexionpia);

    echo "Vuelo Registrado";
    ?>
</body>
</html>