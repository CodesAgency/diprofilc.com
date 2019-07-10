<?php

header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
//header("Expires: Sat, 1 Jul 2019 05:00:00 GMT"); // Fecha en el pasado
?>
 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="stilos.css">
<link rel="stylesheet" href="mapEcuador.css">
<link rel="stylesheet" href="provinciasEcuador.css">
<link rel="stylesheet" href="footer.css">
<link rel="stylesheet" href="showDataProv.css">
<link rel="stylesheet" href="productos.css">
<link rel="icon" type="image/png" href="logotipo/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <style>
        *{
            font-family: 'Roboto Condensed', sans-serif;
        }
</style>
</head>
<body>
<!--MODAL-->

<!--/MODAL-->
<div class="container-fluid">
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
<a class="dropdown-item" href="#">Equipamento para Filtros</a>
<a class="dropdown-item" href="#">Carbón Antracita</a>
<a class="dropdown-item" href="#">Conos para fondos falsos</a>
<!--<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Bloques de cemento</a>
</div>-->
</li>
<li class="nav-item">
<a class="nav-link text-info" href="#">Contactos</a>
</li>

</ul>
</div>
</nav>
</div>
<!-- banner header -->
<!--productos [INICIO]-->
<div class="container-fluid" id="products">
        <div class="container mt-4 mb-4 p-4" id="anntracita">
            <div id="paragraphAntracita">
                <p>
                <h3 class="carbonAnt">Carbón de Antracita</h3>
                La antracita es el carbón mineral más metamórfico y el que presenta mayor contenido en carbono. Es de color negro a gris acero con un lustre brillante.<br>
                La antracita se utiliza como un medio granular filtrante en el tratamiento del gua ...
                </p>
                <button class="btn btn-primary"><a href="contact.php" class="rePedido">¡Realizar Pedido!</a></botton>
            </div>
            <img src="productosDiprofilc/antracita-glove.png" width="300px" height="auto" id="gloveAntracita" title="Carbón de Antracita para filtrado">
            <figure id="imgAntracita">
                <img src="productosDiprofilc/antracita.png" width="300px" height="auto" alt="">
            </figure>
           
        </div>
        <hr class="container">
    <!--producto 2-->
        <div class="container mt-4 mb-4 p-4" id="arenaSilisica">
            <figure id="imgSilicica">
                <img src="productosDiprofilc/arenaSilicica.png" width="300px" height="auto" alt="">
            </figure>
            <img src="productosDiprofilc/arenaSilicica-glove.png" width="300px" height="auto" id="gloveSilicica" title="Carbón de Antracita para filtrado">
            <div id="paragraphAntracita">
                <p>
                <h3 class="carbonAnt">Arena Silícica</h3>
                La arena sílica o arena de sílice es un compuesto resultante de la combinación del sílice con el oxigeno. Su composición química está formada por un átomo de sílice y dos átomos de Oxigeno, formando una molécula muy estable: SiO. Esta molécula es insoluble en agua y en la naturaleza se encuentra en forma de cuarzo.
                </p>
                <button class="btn btn-primary"><a href="contact.php" class="rePedido">¡Realizar Pedido!</a></botton>
            </div>
        </div>
        <!--/producto2-->
        <hr class="container">
        <!--producto3-->
        <div class="container mt-4 mb-4 p-4" id="conosAcero">
        <div id="aceroInox">
                <p>
                <h3 class="carbonAnt">Conos de Acero Inoxidable</h3>
                
                </p>
                <button class="btn btn-primary"><a href="contact.php" class="rePedido">¡Realizar Pedido!</a></botton>
            </div>
            <img src="productosDiprofilc/conosAcero-glove.png" width="300px" height="auto" id="gloveAcero" title="Conos de acero inoxidable">
            <figure id="imgConAncero">
                <img src="productosDiprofilc/conos_de_acero.png" width="300px" height="auto" alt="">
            </figure>
            
            
        </div>
        <!--/producto3-->
        <script type="text/javascript" src="productosAnimate.js"></script>
</div>
<!--productos [FIN]-->
<div id="helpus" class="container-fluid">
    <p>Necesitas Ayuda? <button class="btn btn-info" data-toggle="modal" data-target="#helpUSer">Click aquí</button></p>
</div>
<div class="modal fade" id="helpUSer" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">¿Como Contactarnos?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
        Puedes hacerlo mediante nuestros números de contactos... <br>
        (+593) 993282792 -
        04 2682 497
    </p>
    <p>
       O puedes ir al <button class="btn btn-info"><a href="contact.php"> Formulario</a> </button> de pedido, donde podrás describir tus requerimientos.<br> <strong>
           Trate de proveer todos los datos, para poderte contactar.</strong>
    </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- footer inicio -->
<div class="container-fluid" id="footer">
    <div class="contacts" id="contacts">
    <p><h3> Contáctos: </h3></p>
    <div id="whatsapp" class="contacts mt-4 mb-4">
    <div class="redes"></div><p id="phone">(+593) 993282792 <br> 04 2682 497</p>
    </div>
    <div id="mail" class="contacts mt-4 mb-4">
    <div class="mail"></div><p id="phone2">diprofilc@hotmail.com</p>
    </div>
    <div id="sitio" class="contacts mt-4 mb-4">
    <div class="sitio"></div><p id="phone3">Kenedy Norte Mz. 401 Villa 25.</p>
    </div>
</div>
<div class="contacts" id="notFomr">
        <p id="note"><h3>Nota:</h3></p>
        <p><h5>Si deseas contactarte, por algún servicio en particular o simplemente <br> recibir una cotización de algún material ingresa <button type="button" id="btn" class="btn btn-primary"><a class="contactS" href="contact.php">aquí</a>  </button></h5></p>

        </div>

        <!--
<div class="contacts" id="serviosFooter">
    <p><h3>Servicios:</h3></p>
    <ul>
        <li>Mantenimiento</li>
        <li>Mantenimiento</li>
        <li>Mantenimiento</li>
        <li>Mantenimiento</li>
        <li>Mantenimiento</li>
        <li>Mantenimiento</li>
    </ul>
</div> -->

</div>
</div>
<div id="marcaRegistrada" class="container-fluid">
   <p><h6>Diprofilc s.a. ®  |  Guayaquil - Ecuador  |  1998 - 2019</h6></p>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>