<html>
    <head>
        <title>Modificar AEROPUERTO</title>
    </head>

    <body>
        <?php
       $conexionpia = mysqli_connect("localhost", "root", "", "pia") or 
        die("Ocurrió un problema en la conexión");

        $registros = mysqli_query($conexionpia, "select * from aeropuerto where codigo='$_REQUEST[Aeropuerto]'") or
        die ("Problemas en el select:" . mysqli_error($conexionpia));
        if ($reg = mysqli_fetch_array($registros)){
            ?>

            <form action="modifAeropuerto.php" method="post">
                Id del aeropuerto:
                <input type="text" name="vaeropuerto" value="<?php echo $reg['codigo']?>"readonly>
                Ingrese el nuevo aeropuerto:
                <input type="text" name="naeropuerto" value="<?php echo $reg['codigo']?>">
                <br>
                <input type="submit" value="Modificar">
            </form>

            <?php
        }else
        echo "No existe el aeropuerto";
        ?>
    </body>
</html>