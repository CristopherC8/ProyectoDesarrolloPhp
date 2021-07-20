<html>
    <head>
        <title> Lista de Programas de Aeropuerto</title>
    </head>

    <body>
        <?php
        $conexionpia = mysqli_connect("localhost", "root","","pia") or die ("Conexion no establecida");
        $registros=mysqli_query($conexionpia, "select id_aeropuerto_programa,aterrizaje,despegue,escala,codigo,no_programa from aeropuerto_programa") 
        or die ("No ese mostraron los datos" . mysqli_error($conexionpia));
        while ($fila=mysqli_fetch_array($registros)){
            echo "ID Aeropuerto Programa: " . $fila['id_aeropuerto_programa']. "<br>";
            if(isset($_REQUEST['Aterrizaje'])){
                echo "Aterrizaje :" . $fila['aterrizaje'] . "<br>";
            }
            if(isset($_REQUEST['Despegue'])){
                echo "Despegue ;" . $fila['despegue'] . "<br>";
            }
        
                echo "Escala : " . $fila['escala'] . "<br>";
                echo "Codigo : " . $fila['codigo'] . "<br>";
                echo "Numero de Programa : " . $fila['no_programa'] . "<br>";
                echo "<hr>";
            }
            mysqli_close($conexionpia);
            ?>
    </body>
</html>