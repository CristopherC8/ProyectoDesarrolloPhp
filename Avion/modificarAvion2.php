<html>
    <head>
        <title>Modificar Avion 2</title>
    </head>

    <body>
        <?php
        $conexionpia = mysqli_connect("localhost", "root", "", "pia") or 
        die("Ocurrió un problema en la conexión");

        $registros = mysqli_query($conexionpia, "select * from avion where id_avion='$_REQUEST[avion]'") or
        die ("Problemas en el select:" . mysqli_error($conexionpia));
        if ($reg = mysqli_fetch_array($registros)){
            ?>

            <form action="modificarAvion3.php" method="post">
                Id del avion:
                <input type="text" name="vavion" value="<?php echo $reg['id_avion']?>"readonly>
                <br>
                Ingrese el nuevo id del avion:
                <input type="text" name="navion" value="<?php echo $reg['id_avion']?>">
                <br>
                <input type="submit" value="Modificar">
            </form>

            <?php
        }else
        echo "No existe el avion";
        ?>
    </body>
</html>