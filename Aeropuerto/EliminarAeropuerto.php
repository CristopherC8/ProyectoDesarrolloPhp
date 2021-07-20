<html>
    <head>
        <title>Eliminar Aeropuerto</title>
    </head>

    <body>
        <?php
        $conexionpia=mysqli_connect("localhost","root","","pia") or die ("Falla en la conexion");
        $registros = mysqli_query($conexionpia, "select codigo from aeropuerto where codigo='$_REQUEST[Aeropuerto]'") or
        die ("Falla en el select" . mysqli_error($conexionpia));

        if($reg=mysqli_fetch_array($registros)){
            mysqli_query($conexionpia, "delete from aeropuerto where codigo='$_REQUEST[Aeropuerto]'") or
            die ("Falla en el delete" . mysqli_error($conexionpia));
            echo "El aeropuerto fue eliminado exitosamente.";
        }else{
            echo "No se encontró el registro";
        }
        mysqli_close($conexionpia);
        ?>
    </body>
</html>