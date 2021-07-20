<html>
    <head>
        <title>Consulta de Avion</title>
    </head>

    <body>
        <?php
        $conexionpia=mysqli_connect("localhost", "root", "", "pia") or die ("Conexion no establecida");
        $registros=mysqli_query($conexionpia, "select modelo, capacidad, codigo from avion where id_avion = '$_REQUEST[Avion]'")
        or die ("No existe este avion : " . mysqli_error($conexionpia));

        if ($reg = mysqli_fetch_array($registros)){
            echo "modelo:";
            switch ($reg['modelo']){
                case 1:
                    echo "Airbus 319";
                    break;
                case 2:
                    echo "Airbus 320";
                    break;
                case 3:
                    echo "Airbus 330";
                    break;
                case 4:
                    echo "Boeing 737";
                    break;
                case 5:
                    echo "Boeing 747";
                    break;
                case 6:
                    echo "Boeing 747 F Freighter";
                    break;
            }
            echo "capacidad:".$reg['capacidad']. "<br>";
            echo "codigo:".$reg['codigo']. "<br>";
        }else{
            echo "No existe el avion";
        }
        mysqli_close($conexionpia);
        ?>
    </body>
</html>