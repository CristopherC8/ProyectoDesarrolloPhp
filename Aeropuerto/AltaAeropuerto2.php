<html>
<head>
    <title> Agregar Aeropuertos</title>
</head>
     
<body>
 <?php
    $conexionpia=mysqli_connect("localhost","root","","pia") or die("No se encontro la conexion");
    mysqli_query($conexionpia,"INSERT INTO aeropuerto(nombre,ciudad,pais) 
    VALUES ('$_REQUEST[nombre]','$_REQUEST[ciudad]','$_REQUEST[pais]')") 
    or die ("no se agrego vuelo" . mysqli_error($conexionpia));
    mysqli_close($conexionpia);

    echo "Aeropuerto Registrado";
 ?>
</body>
</html>