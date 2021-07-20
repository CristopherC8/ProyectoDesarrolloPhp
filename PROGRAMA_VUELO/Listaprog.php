<html>
<head>
    <title>Programas de Vuelo</title>
</head>
<h1>Lista de Programas de Vuelo</h1>
    <body>
        <?php
        $conexionpia=mysqli_connect("localhost","root","","pia") or die ("No se estableció conexión");
        $registros=mysqli_query($conexionpia, "select * from programa_vuelo")
        or die ("No se mostraron los datos: " . mysqli_error($conexionpia));
        while ($fila=mysqli_fetch_array($registros)){
            echo "ID de Programa de Vuelo: " . $fila['no_programa']. "<br>";
            echo "Linea aerea: " . $fila['linea']. "<br>";
            echo "Dias en que opera: " . $fila['dias']. "<br>";
            echo "<hr>";
        }
        mysqli_close($conexionpia);
        ?>
    </body>
</html>