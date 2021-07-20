<html>
    <head>
        <title>Modificar Programa de Aeropuerto</title>
    </head>

    <body>
        <?php
        $conexionpia = mysqli_connect("localhost", "root", "", "pia") or 
        die("Ocurrió un problema en la conexión");

        $registros = mysqli_query($conexionpia, "select * from aeropuerto_programa where id_aeropuerto_programa='$_REQUEST[aeropuertoP]'") or
        die ("Problemas en el select:" . mysqli_error($conexionpia));
        if ($reg = mysqli_fetch_array($registros)){
            ?>

            <form action="modificarAeropuertoP3.php" method="post">
                Id Programa de aeropuerto
                <input type="text" name="vaeropuertoP" value="<?php echo $reg['id_aeropuerto_programa']?>"readonly>
                <br>
                Ingrese el nuevo programa de aeropuerto:
                <input type="text" name="naeropuertoP" value="<?php echo $reg['id_aeropuerto_programa']?>">
                <br>
                <input type="submit" value="Modificar">
            </form>

            <?php
        }else
        echo "No existe el Programa de aeropuerto";
        ?>
    </body>
</html>