<html>
    <head>
        <title>Agregar Programa de Aeropuerto</title>
    </head>

    <body>
        <?php
        $conexionpia=mysqli_connect("localhost", "root", "", "pia") or die ("No se encontró la conexion");
        mysqli_query($conexionpia, "insert into aeropuerto_programa (aterrizaje,despegue,escala,codigo,no_programa) 
        values ('$_REQUEST[Aterrizaje]', '$_REQUEST[Despegue]', '$_REQUEST[escala]', '$_REQUEST[codigo]', '$_REQUEST[no_programa]')")
        or die ("No se agregó el nuevo programa de aeropuerto" . mysqli_error($conexionpia));

        mysqli_close($conexionpia);

        echo "Programa del Aeropuerto Registrado con éxito!!";
        ?>
    </body>
</html>