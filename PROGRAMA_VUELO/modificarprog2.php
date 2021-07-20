<html>
<head>
    <title>Programas de Vuelo</title>
</head>
<h1>Actualizar Programa de Vuelo</h1>
<body>
    <?php
    $conexionpia = mysqli_connect("localhost", "root", "", "pia") or 
    die("Ocurrió un problema en la conexión");

    $registros = mysqli_query($conexionpia, "select * from programa_vuelo where no_programa='$_REQUEST[no_programa]'") or
    die ("Problemas en la consulta:" . mysqli_error($conexionpia));
    if ($reg = mysqli_fetch_array($registros)){
        ?>
        <form action="modificarprog3.php" method="post">
            Ingrese el nuevo Numero de Vuelo:
            <input type="text" name="nprog" value="<?php echo $reg['no_programa']?>">
            <br>
            <input type="text" name="vprog" value="<?php echo $reg['no_programa']?>">
            <input type="submit" value=" Modificar ">
        </form>

        <?php
    }else
    echo "No existe el Numero de programa de vuelo";
    ?>
</body>
</html>