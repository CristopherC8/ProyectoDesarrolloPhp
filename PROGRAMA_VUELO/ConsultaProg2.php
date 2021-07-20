<html>
<head>
    <title>Programas de Vuelo</title>
</head>
<h1>Consulta de Programas de Vuelo</h1>
<body>
    <?php
    $conexionpia = mysqli_connect("localhost","root","","pia") or die ("Conexion no establecida");
    $registros = mysqli_query($conexionpia,"select * from programa_vuelo where no_programa = '$_REQUEST[no_programa]'")
    or die ("Programa de vuelo inexistente: ") . mysqli_error($conexionpia);

    if($reg = mysqli_fetch_array($registros)){
        echo "ID: ".$reg['no_programa']. "<br>";
        echo "Linea aerea: ".$reg['linea']. "<br>";
        echo "Dias en que opera: ".$reg['dias']. "<br>";
    }else{
        echo "Programa de vuelo inexistente";
    }
    mysqli_close($conexionpia);
    ?>
</body>
</html>