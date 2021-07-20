<html>
    <head>
        <title>Modificar Aeropuerto 3</title>
    </head>

    <body>
        <?php
        $conexionpia = mysqli_connect("localhost", "root", "", "pia") or die("Ocurrió un problema con la conexion");

        mysqli_query($conexionpia, "update aeropuerto set codigo='$_REQUEST[naeropuerto]' where codigo='$_REQUEST[vaeropuerto]'") or
        die("Problemas en el select:" . mysqli_error($conexionpia));
        echo "Aeropuerto modificado";
        ?>
    </body>
</html>