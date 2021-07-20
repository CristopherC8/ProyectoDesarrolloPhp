<html>
    <head>
        <title>Actualizar vuelos</title>
    </head>
<body>
    <?php
    $conexionpia=mysqli_connect("localhost","root","","pia")or die("Falla en la conexion");
    $registros = mysqli_query($conexionpia,"select * from vuelos where no_vuelo='$_REQUEST[vuelo]' ")or
    die ("Falla en la consulta: " . mysqli_error($conexionpia));

    if($reg=mysqli_fetch_array($registros)){
    ?>

    <form action="modificarvuelos3.php" method="post">
      Numero del vuelo:
      <input type="text" name="vvuelo" value="<?php echo $reg['no_vuelo'] ?>" size="5" readonly>
      <br>
      Fecha:
      <input type="date" name="vfecha" value="<?php echo $reg['fecha'] ?>"readonly>
      
      Ingrese la nueva fecha:
      <input type="date" name="nfecha" value="<?php echo $reg['fecha'] ?>">
      <br>

      Destino:
      <input type="text" name="vdestino" value="<?php echo $reg['destino'] ?>"readonly>
      
      Ingrese nuevo destino:
      <input type="text" name="ndestino" value="<?php echo $reg['destino'] ?>">
      <br>
      Origen:
      <input type="text" name="vorigen" value="<?php echo $reg['origen'] ?>"readonly>
      
      Ingrese nuevo origen:
      <input type="text" name="norigen" value="<?php echo $reg['origen'] ?>">
      <br>
      <input type="submit" value="Modificar">
    </form>
    <?php
    }else
    echo "No existe el nuemero de vuelo";
    ?>
</body>
</html>