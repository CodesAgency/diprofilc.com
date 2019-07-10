 

<?php

header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
//header("Expires: Sat, 1 Jul 2019 05:00:00 GMT"); // Fecha en el pasado
?>
 
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactar</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid mb-4">
<div class="container-fluid" id="containerNav">
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
<a class="navbar-brand" href="#"> <img src="logotipo/logo-diprofilc.png" width="250px" height="auto" alt="Diprofilc s.a. " id="imagenLogo"> </a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link text-info" href="index.php">Inicio <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item dropdown">
<a class="nav-link text-info dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Productos
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="productos.php">Carbón Antracita</a>
<a class="dropdown-item" href="productos.php">Arena Silísica</a>
<a class="dropdown-item" href="productos.php">Conos para fondos falsos</a>
<!--<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Bloques de cemento</a>
</div>-->
</li>


</ul>
</div>
</nav>
</div>
<!--FORMULARIO INICIO-->
<div class="container-fluid" id="bgContainerForm">
<div class="container mt-4 p-4" id="containerForm">
<form action="sendForm.php" method="POST">
 
  <div class="form-group">
    <label for="exampleFormControlInput1">Email:</label>
    <input type="email" name="emailDiprofilc" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" require>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Nombre:</label>
    <input type="text" name="nombreDiprofilc" class="form-control" id="exampleFormControlInput2" placeholder="" require>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput3">Teléfono:</label>
    <input type="number" name="telefonoDiprofilc" class="form-control" id="exampleFormControlInput3" placeholder="" require>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea4">Pedido:</label>
    <textarea class="form-control" name="asuntoDiprofilc" id="exampleFormControlTextarea4" rows="3" placeholder="Escribe tu pedido o consulta proto nos comunicaremos contigo..."></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea4">Una vez enviado este formulario nos comunicaremos con usted al método de comunicación que escribió <strong>(email y teléfono)</strong>.</label>
    <input type="submit" class="btn btn-primary" id="exampleFormControlInput5" value="Enviar solicitud">
  </div>
</form>
</div>
</div>
<div class=" container" id="miniFooter">
<p><h6>Diprofilc s.a. ®  |  Guayaquil - Ecuador  |  1998 - 2019 <br> Si tienes alguna duda consulata nuestras <a href="faq.html">Preguntas Frecuentes</a></h6></p>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>