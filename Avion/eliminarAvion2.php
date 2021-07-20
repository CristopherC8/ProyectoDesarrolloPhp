<html>
    <head>
        <title>Eliminar Avion</title>
    </head>

    <body>
        <?php
        $conexionpia=mysqli_connect("localhost","root","","pia") or die ("Falla en la conexion");
        $registros = mysqli_query($conexionpia, "select id_avion from avion where id_avion='$_REQUEST[avion]'") or
        die ("Falla en el select" . mysqli_error($conexionpia));

        if($reg=mysqli_fetch_array($registros)){
            mysqli_query($conexionpia, "delete from avion where id_avion='$_REQUEST[avion]'") or
            die ("Falla en el delete" . mysqli_error($conexionpia));
            echo "Avion eliminado con éxito!!";
        }else{
            echo "No se encontró el registro";
        }
        mysqli_close($conexionpia);
        ?>
    </body>
</html>