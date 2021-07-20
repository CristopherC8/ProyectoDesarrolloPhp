<html>
    <head>
        <title>Agregar Avion</title>
    </head>

    <body>
        <?php
        $conexionpia=mysqli_connect("localhost", "root", "", "pia") or die ("No se encontró la conexion");
        mysqli_query($conexionpia, "insert into avion (modelo,capacidad,codigo) 
        values ('$_REQUEST[modelo]', '$_REQUEST[capacidad]', '$_REQUEST[codigo]')")
        or die ("No se agregó el nuevo avión" . mysqli_error($conexionpia));

        mysqli_close($conexionpia);

        echo "Avion Registrado con éxito!!";
        ?>
    </body>
</html>