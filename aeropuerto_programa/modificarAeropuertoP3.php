<html>
    <head>
        <title>Modificar Programa de Aeropuerto 3</title>
    </head>

    <body>
        <?php
        $conexionpia = mysqli_connect("localhost", "root", "", "pia") or die("Ocurrió un problema con la conexion");

        mysqli_query($conexionpia, "update aeropuerto_programa set id_aeropuerto_programa='$_REQUEST[naeropuertoP]' where id_aeropuerto_programa='$_REQUEST[vaeropuertoP]'") or
        die("Problemas en el select:" . mysqli_error($conexionpia));
        echo "Programa de Aeropuerto modificado";
        ?>
    </body>
</html>