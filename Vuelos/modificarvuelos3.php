<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $conexionpia = mysqli_connect("localhost", "root", "", "pia") or
        die("Problemas con la conexión");

    mysqli_query($conexionpia, "update vuelos
    set fecha='$_REQUEST[nfecha]',destino='$_REQUEST[ndestino]', origen='$_REQUEST[norigen]' 
    where no_vuelo='$_REQUEST[vvuelo]'and fecha='$_REQUEST[vfecha]'and destino='$_REQUEST[vdestino]' and origen='$_REQUEST[vorigen]'") or
    die("Problemas en el select:" . mysqli_error($conexionpia));
    echo "vuelo modificado";
    ?>
</body>

</html>