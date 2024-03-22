<?php

$sErr = "";
$sNom = "";

if(isset($_POST["txtNombre"]) && !empty($_POST["txtNombre"]))
$sNom = $_POST["txtNombre"];
else
$sErr = "Faltan datos";

if($sErr != "")
header("Location: error.php?sError=".$sErr);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Formulario HTML5</title>
</head>
<body>
    <h4>Datos Capturados</h4>
    Nombre: <?php echo $_POST["txtNombre"];?> <br/>
    Edad: <?php echo $_POST["txtEdad"];?> <br/>
    Sexo: <?php echo   $_REQUEST["txtRadio"];?> <br/>
    Correo: <?php echo $_REQUEST["txtCorreo"];?> <br/>
    Celular: <?php echo $_POST["txtCel"];?> <br/>

    Semestre: <?php echo $_REQUEST["txtNum"];?> <br/>


    CURP: <?php echo $_REQUEST["txtCURP"];?> <br/>
   Tipo: <?php echo $_REQUEST["txtOpc1"];?> <br/><br><br>


<a href="index.html">Regresar al formulario</a>
</body>
</html>