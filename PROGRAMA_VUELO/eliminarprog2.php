<html>
<head>
    <title>Programas de Vuelo</title>
</head>
<h1>Eliminar Programa de Vuelo</h1>
<body>
    <?php
    $conexionpia = mysqli_connect("localhost","root","","pia") or die ("Conexion no establecida");
    
    $registros = mysqli_query($conexionpia,"select no_programa from programa_vuelo where no_programa = '$_REQUEST[no_programa]'")
    or die ("Falla en la seleccion del programa de vuelo: ") . mysqli_error($conexionpia);

    if($reg = mysqli_fetch_array($registros)){
        mysqli_query($conexionpia,"delete from programa_vuelo where no_programa = '$_REQUEST[no_programa]'")
        or die ("Error al borrrar programa de vuelo ". mysqli_error($conexionpia));
        echo "Programa de vuelo eliminado";
    }else{
        echo "Programa de vuelo inexistente";
    }
    mysqli_close($conexionpia);
    ?>
</body>
</html>