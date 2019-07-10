<?php
$inText = [
'DIPROFILC S.A.',
'Nuestra Historia'
]
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="stilos.css">
<link rel="stylesheet" href="mapEcuador.css">
<link rel="stylesheet" href="provinciasEcuador.css">
<link rel="stylesheet" href="footer.css">
<link rel="stylesheet" href="showDataProv.css">
<link rel="stylesheet" href="certificaciones.css">
<link rel="icon" type="image/png" href="logotipo/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<title><?php echo $inText[0] ?></title>
<style>
*{
font-family: 'Roboto Condensed', sans-serif;
}



</style>
</head>
<body>
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
<a class="dropdown-item" href="productos.php">Equipamento para Filtros</a>
<a class="dropdown-item" href="productos.php">Carbón Antracita</a>
<a class="dropdown-item" href="productos.php">Conos para fondos falsos</a>
<!--<div class="dropdown-divider"></div>-->
</div>
</li>
<li class="nav-item">
<a class="nav-link text-info" href="contact.php">Contactos</a>
</li>

</ul>
</div>
</nav>
</div>
<!-- banner header -->
<div class="bd-example mt-3 mb-4">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="imgs/100_0100.png" class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block">
<h5>TRASLADO HACIA EL PUNTO</h5>
<p> <strong>Diprofilc</strong> Tinene una amplia capacidad de traslado gracias a nuestro equipo.</p>
</div>
</div>
<div class="carousel-item">
<img src="imgs/100_0098.jpg" class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block">
<h5>INSTALACIÓN DE MEDIOS PARA LA FILTRACIÓN</h5>
<p>Instalación de filtros para agua.</p>
</div>
</div>
<div class="carousel-item">
<img src="imgs/100_0099.png" class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block">
<h5>FILTRACIÓN EXITOSA</h5>
<p>Su empresa producirá agua limpia para toda su comunidad.</p>
</div>
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>
<!-- /banner header -->
<!-- History -->
</div>
<div class="container-fluid"> <div class="jumbotron mt-4 mb-4">
<div id="title-history" >
<div id="ico-history"></div><h1 class="display-4"> <?php echo $inText[1] ?></h1>
</div>
<p class="lead">Desde 1980 se iniciaron los primeros trabajos de mantenimiento y producción de los sistemas de
agua potable en las diferentes ciudades
del Ecuador, con el suministro de arena silícica y grava silícica.
En el 2016 se conformó la empresa DIPROFILC S.A. para continuar con los trabajos.

</p>
<hr class="mt-4">
<p>"Esfuerzo y responsabilidad es lo que define nuestra empresa".</p>
<a class="btn btn-primary btn-lg" href="#" role="button">Leer más</a>
</div>
</div>
<!-- /History -->
<!-- Capacidad del Equipo -->

<div class="container mt-4 mb-4" id="titleCapEquip">
<div id="ico-trab"></div>
<h2>CAPACIDAD Y EQUIPO</h2>
    <hr>
</div>

<div class="container mt-4 mb-4">
    <div id="transp">
        <div id="especificaciones">
            <p class="container mt-4 mb-4"> 
                <h3 id="h3">Equipo:</h3>
            </p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Camión de 6 Toneladas</li>
            <li class="list-group-item">Maquinaria para tamizado de material filtrante</li>
            <li class="list-group-item">Equipo triturador</li>
            <li class="list-group-item">Cosedora de sacos</li>
            <li class="list-group-item">Bloquera</li>
        </ul>
        </div>
    </div>
</div>
<!-- /Capacidad del Equipo -->
<!--mapa interactivo-->
<div class="container">
<div class="container mt-4 mb-4" id="titleCapEquip3">
<div id="ico-site"></div>  <h2>Provincias a las que llegamos.  </h2>
    <hr>
</div>
</div>

<div class="container mt-4 mb-4" id="map">
    <div class="text">
    <ul class="list-group list-group-flush">
        <li class="list-group-item" id="l1a">Guayas</li>
        <li class="list-group-item" id="l2a">Santa ELena</li>
        <li class="list-group-item" id="l3a">El Oro</li>
        <li class="list-group-item" id="l4a">Manabí</li>
    </ul>
    </div>
    <div class="text">
        <figure>
            <div class="provEcuador" id="guayas"></div>
            <div class="provEcuador" id="santaElena"></div>
            <div class="provEcuador" id="elOro"></div>
            <div class="provEcuador" id="manabi"></div>
            <div class="provEcuador" id="cañar"></div>
            <div class="provEcuador" id="cotopaxi"></div>
            <div class="provEcuador" id="imbabura"></div>
            <div class="provEcuador" id="bolivar"></div>
            <div class="provEcuador" id="azuay"></div>
            <div class="provEcuador" id="loja"></div>
            <div class="provEcuador" id="pichincha"></div>
            <img src="map/Mapa_del_Ecuador.png" alt="Mapa del Ecuador Diprofilc s.a.">
        </figure>
    </div>
    <div class="text"> 
    <ul class="list-group list-group-flush">
        <li class="list-group-item" id="l1b">Cañar</li>
        <li class="list-group-item" id="l2b">Cotopaxi</li>
        <li class="list-group-item" id="l3b">Imbabura</li>
        <li class="list-group-item" id="l4b">Bolívar</li>
        <li class="list-group-item" id="l5b">Azuay</li>
        <li class="list-group-item" id="l6b">Loja</li>
        <li class="list-group-item" id="l7b">Pichincha</li>
    </ul>
    </div>
    <div id="interactiveData">
    <!--div id="interactiveDataMap"></div>-->
    <div id="interactiveDataTitle">
    
    </div>
    <div id="interactiveDataParagraph">
        
    </div>
    <div id="interactiveDataLink"></div>
</div>
    <script src="getDataJs.js"></script>
</div>

<script src="jumbo.js">
</script>

<!--/mapa interactivo-->
<!--certificaciones ISO-->
<div class="container-fluid mb-4 p-4" id="certificadosISO">
    <figure id="certificaciones">
        <img src="certificaciones/descarga.png" width="auto" height="150px">
        <p>CERTIFICAIONES</p>
    </figure>
    <div id="awwa">
        <figure>
            <img src="certificaciones/awwa.png" width="200px" height="auto" alt="certificacion awwa">
        </figure>
    </div>
    
    <div id="awwa">
    <figure>
            <img src="certificaciones/inen_001.jpg" alt="certificacion INEN" width="300px" height="auto">
            <p id="nte">NTE INEN 2149 - AGUA. <br>MEDIOS FILTRANTES GRANULARES UTILIZADO<br> EN EL TRATAMIENTO DE AGUAS.</p>
        </figure>
    </div>
</div>
<!--/certificaciones ISO-->
<!-- footer inicio -->
<div class="contianer" id="footer">
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
<!-- </div>
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

