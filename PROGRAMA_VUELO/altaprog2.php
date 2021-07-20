<html>
<head>
    <title>Programas de Vuelo</title>
</head>
<h1>Alta de Programas de Vuelo</h1>
<body>
    <?php
    $conexionpia = mysqli_connect("localhost","root","","pia") or die("No se establecio la conexion");
    mysqli_query($conexionpia,"insert into programa_vuelo (linea, dias) values ('$_REQUEST[linea]','$_REQUEST[dias]')")
    or die("No se agrego el programa de vuelo".mysqli_error($conexionpia));

    mysqli_close($conexionpia);
    echo "Programa de Vuelo registrado";
    ?>
</body>
</html>