<html>
    <head>
        <title> Consulta de Programa de Aeropuerto</title>
    </head>

    <body>
        <?php
        $conexionpia = mysqli_connect("localhost", "root","","pia") or die ("Conexion no establecida");
        $registros=mysqli_query($conexionpia,"select aterrizaje,despegue,escala,codigo,no_programa from aeropuerto_programa where id_aeropuerto_programa = '$_REQUEST[AeropuertoP]'") 
        or die ("No existe ese Programa de aeropuerto" . mysqli_error($conexionpia));
        if ($reg = mysqli_fetch_array($registros)){
            echo "Aterrizaje:". $reg['aterrizaje']. "<br>";
            /*
            if(isset($_REQUEST['Aterrizaje'])){
                echo "Aterrizaje :" . $reg['aterrizaje'] . "<br>";
            }*/
            echo "Despegue:". $reg['despegue']. "<br>";
            /*
            if(isset($_REQUEST['Despegue'])){
                echo "Despegue ;" . $reg['despegue'] . "<br>";
            }*/
                echo "Escala : " . $reg['escala'] . "<br>";
                echo "Codigo : " . $reg['codigo'] . "<br>";
                echo "Numero de Programa : " . $reg['no_programa'] . "<br>";
        }
        else{
            echo "No existe el programa del aeropuerto";
        }
        mysqli_close($conexionpia);
        ?>
    </body>
</html>