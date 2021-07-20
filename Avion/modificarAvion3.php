<html>
    <head>
        <title>Modificar Avion 3</title>
    </head>

    <body>
        <?php
        $conexionpia = mysqli_connect("localhost", "root", "", "pia") or die("Ocurrió un problema con la conexion");

        mysqli_query($conexionpia, "update avion set id_avion='$_REQUEST[navion]' where id_avion='$_REQUEST[vavion]'") or
        die("Problemas en el select:" . mysqli_error($conexionpia));
        echo "Avion modificado";
        ?>
    </body>
</html>