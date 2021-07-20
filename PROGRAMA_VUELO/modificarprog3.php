<html>
<head>
    <title>Programas de Vuelo</title>
</head>
<h1>Actualizar Programa de Vuelo</h1>
<body>
    <?php
    $conexionpia = mysqli_connect("localhost", "root", "", "pia") or die("Ocurrió un problema con la conexion");

    mysqli_query($conexionpia, "update programa_vuelo set no_programa='$_REQUEST[nprog]' where no_programa='$_REQUEST[vprog]'") or
    die("Problemas en la consulta:" . mysqli_error($conexionpia));
    echo "Numero de programa de vuelo modificado";
    ?>
    <br>
</body>
</html>