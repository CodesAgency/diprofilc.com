<?php
include 'connect.php';
$emailDiprofilc = $_REQUEST['emailDiprofilc'];
$nombreDiprofilc = $_REQUEST['nombreDiprofilc'];
$telefonoDiprofilc = $_REQUEST['telefonoDiprofilc'];
$asuntoDiprofilc = $_REQUEST['asuntoDiprofilc'];

/*
echo $name;
echo $email;
echo $clave;
echo $inipassword;
echo $telefono;
*/
$dataSend = mysqli_query($conexion,"insert into asuntoDiprofilc(nombreDiprofilc,emailDiprofilc,telefonoDiprofilc,asuntoDiprofilc) values 
                       ('$emailDiprofilc','$nombreDiprofilc','$telefonoDiprofilc','$asuntoDiprofilc')")
  or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

header ("Location: index.php");



?>