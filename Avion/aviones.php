<html>
    <head>
        <title> Lista de aviones</title>
    </head>

    <body>
        <?php
        $conexionpia = mysqli_connect("localhost", "root","","pia") or die ("Conexion no establecida");
        $registros=mysqli_query($conexionpia, "select id_avion,modelo, capacidad, codigo from avion") 
        or die ("No ese mostraron los datos" . mysqli_error($conexionpia));
        while ($fila=mysqli_fetch_array($registros)){
            echo "ID del avion: " . $fila['id_avion']. "<br>";
            echo "modelo : ";
            switch ($fila['modelo']){
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
                echo "capacidad : " . $fila['capacidad'] . "<br>";
                echo "codigo : " . $fila['codigo'] . "<br>";
                echo "<br>";
                echo "<hr>";
            }
            mysqli_close($conexionpia);
            ?>
    </body>
</html>