<html>
    <head>
        <title>Eliminar Programa de Aeropuerto</title>
    </head>

    <body>
        <?php
        $conexionpia=mysqli_connect("localhost","root","","pia") or die ("Falla en la conexion");
        $registros = mysqli_query($conexionpia, "select aterrizaje,despegue,escala,codigo,no_programa from aeropuerto_programa where id_aeropuerto_programa = '$_REQUEST[aeropuertoP]'") or
        die ("Falla en el select" . mysqli_error($conexionpia));

        if($reg=mysqli_fetch_array($registros)){
            mysqli_query($conexionpia, "delete from aeropuerto_programa where id_aeropuerto_programa='$_REQUEST[aeropuertoP]'") or
            die ("Falla en el delete" . mysqli_error($conexionpia));
            echo "Programa de aeropuerto eliminado con éxito!!";
        }else{
            echo "No se encontró el registro";
        }
        mysqli_close($conexionpia);
        ?>
    </body>
</html>