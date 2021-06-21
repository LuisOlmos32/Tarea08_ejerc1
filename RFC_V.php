<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>GENERADOR DE RFC</title>
</head>
<body>
     <!--FORMULARIO-->
     <form class="registro" action="index.php" method="POST"><!---->
     <h1>GENERADOR RFC</h1>
     <label for="txtNombre">Ingresa tu Nombre</label>
     <input class="controls" type="text" name="txtNombre" placeholder="Ingresa tu nombre" required>
     <label for="txtApeP">Apellido Paterno:</label>
     <input class="controls" type="text" name="txtApeP" placeholder="Ingresa tu 1er apellido" required>
     <label for="txtApeM">Apellido Materno:</label>
     <input class="controls" type="text" name="txtApeM" placeholder="Ingresa tu 2do apellido" required>
     <label for="txtFecha">Fecha de Nacimiento:</label>
     <input class="controls" type="date" name="txtFecha"  required>
     <input class="boton" type="submit" name="mostrar" value="Enviar"> 
     <?php
     if(isset($datos)) echo "TU RFC ES: " . $datos;
     ?>
    </form>

    
    
   


</body>

  