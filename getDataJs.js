//toma de datos para variables Li del mapa
//aquí se esta llegando a las variables del div #map {INICIO}
const provinciasEcuador = {
        costa: {
            guayas: document.getElementById('l1a'),
            santaElena: document.getElementById('l2a'),
            elOro: document.getElementById('l3a'),
            manabi: document.getElementById('l4a'),
        },

        sierra: {
            canar: document.getElementById('l1b'),
            cotopaxi: document.getElementById('l2b'),
            imbabura: document.getElementById('l3b'),
            bolivar: document.getElementById('l4b'),
            azuay: document.getElementById('l5b'),
            loja: document.getElementById('l6b'),
            pichincha: document.getElementById('l7b')
        }
    }
    //toma de imagenes de las Provincias en constante [inicio]
const imgProvEcu = {
    costa: {
        guayas: document.getElementById('guayas'),
        santaElena: document.getElementById('santaElena'),
        elOro: document.getElementById('elOro'),
        manabi: document.getElementById('manabi')
    },

    sierra: {
        canar: document.getElementById('cañar'),
        cotopaxi: document.getElementById('cotopaxi'),
        imbabura: document.getElementById('imbabura'),
        bolivar: document.getElementById('bolivar'),
        azuay: document.getElementById('azuay'),
        loja: document.getElementById('loja'),
        pichincha: document.getElementById('pichincha')
    }
}
console.log(imgProvEcu.costa.santaElena)
    //toma de imagenes de las Provincias en constante [fin]

//aquí se esta llegando a las variables del div #map {FIN}
/*
function showCosta(nameAnimation, horv) {
    //guayas
    imgProvEcu.costa.guayas.style.animation = nameAnimation;
    imgProvEcu.costa.guayas.style.visibility = horv;
    //santa elena
    imgProvEcu.costa.santaElena.style.animation = nameAnimation;
    imgProvEcu.costa.santaElena.style.visibility = horv;
    //el oro
    imgProvEcu.costa.elOro.style.animation = nameAnimation;
    imgProvEcu.costa.elOro.style.visibility = horv;
    //manabi
    imgProvEcu.costa.manabi.style.animation = nameAnimation;
    imgProvEcu.costa.manabi.style.visibility = horv;
}

function showSierra(nameAnimation, horv) {
    //cañar
    imgProvEcu.sierra.canar.style.animation = nameAnimation;
    imgProvEcu.sierra.canar.style.visibility = horv;
    //cotopaxi
    imgProvEcu.sierra.cotopaxi.style.animation = nameAnimation;
    imgProvEcu.sierra.cotopaxi.style.visibility = horv;
    //imbabura
    imgProvEcu.sierra.imbabura.style.animation = nameAnimation;
    imgProvEcu.sierra.imbabura.style.visibility = horv;
    //bolivar
    imgProvEcu.sierra.bolivar.style.animation = nameAnimation;
    imgProvEcu.sierra.bolivar.style.visibility = horv;
    //azuay
    imgProvEcu.sierra.azuay.style.animation = nameAnimation;
    imgProvEcu.sierra.azuay.style.visibility = horv;
    //loja
    imgProvEcu.sierra.loja.style.animation = nameAnimation;
    imgProvEcu.sierra.loja.style.visibility = horv;
    //pichincha
    imgProvEcu.sierra.pichincha.style.animation = nameAnimation;
    imgProvEcu.sierra.pichincha.style.visibility = horv;
}*/

//aquí se esta llegando a las variables del div #map {FIN}

function animateProvinces(obj, opacityOne, opacityTwo) {
    obj.animate([
        // keyframes
        { opacity: opacityOne },
        { opacity: opacityTwo }
    ], {
        // timing options
        duration: 2000,
        iterations: 1
    });
}

//casos costa
switch (provinciasEcuador) {
    case provinciasEcuador.costa.guayas.addEventListener('click', activeGuayas):
        function activeGuayas() {
            //Fx(fade in Provincias)[inicio]
            animateProvinces(imgProvEcu.costa.guayas, "0", "1");
            imgProvEcu.costa.santaElena.style.backgroundImage = "none";
            imgProvEcu.costa.elOro.style.backgroundImage = "none";
            imgProvEcu.costa.manabi.style.backgroundImage = "none";
            imgProvEcu.sierra.azuay.style.backgroundImage = "none";
            imgProvEcu.sierra.bolivar.style.backgroundImage = "none";
            imgProvEcu.sierra.canar.style.backgroundImage = "none";
            imgProvEcu.sierra.cotopaxi.style.backgroundImage = "none";
            imgProvEcu.sierra.imbabura.style.backgroundImage = "none";
            imgProvEcu.sierra.loja.style.backgroundImage = "none";
            imgProvEcu.sierra.pichincha.style.backgroundImage = "none";
            //Fx(fade in Provincias)[fin]

            //animacion de provincias en tiempo de ejecución [inicio]
            imgProvEcu.costa.guayas.style.backgroundImage = linksImgs.guayas;
            //animacion de provincias en tiempo de ejecución [fin]

            animateDiv("0px", "300px", "100px", "300px");
            imgProvEcu.costa.guayas.style.animation = "showGuayas 1s ease 1";
            changeDataText("<h3><strong>Guayas</strong></h3>",
                "<strong>Nuestros trabajos han llegado:</strong><br>Guayaquil, Daule, El Empalme, Isidro Ayora, Laurel",
                "<a href='portafolio.html'>Mirar Portafolio</a>");
            changeStyles("solid 1px steelblue");
        }
        break;
    case provinciasEcuador.costa.santaElena.addEventListener('click', activeSantaELena):
        function activeSantaELena() {

            //Fx(fade in Provincias)[inicio]
            animateProvinces(imgProvEcu.costa.santaElena, "0", "1");
            imgProvEcu.costa.guayas.style.backgroundImage = "none";
            imgProvEcu.costa.elOro.style.backgroundImage = "none";
            imgProvEcu.costa.manabi.style.backgroundImage = "none";
            imgProvEcu.sierra.azuay.style.backgroundImage = "none";
            imgProvEcu.sierra.bolivar.style.backgroundImage = "none";
            imgProvEcu.sierra.canar.style.backgroundImage = "none";
            imgProvEcu.sierra.cotopaxi.style.backgroundImage = "none";
            imgProvEcu.sierra.imbabura.style.backgroundImage = "none";
            imgProvEcu.sierra.loja.style.backgroundImage = "none";
            imgProvEcu.sierra.pichincha.style.backgroundImage = "none";
            //Fx(fade in Provincias)[fin]

            //animacion de provincias en tiempo de ejecución [inicio]
            imgProvEcu.costa.santaElena.style.backgroundImage = linksImgs.santaELena;
            //animacion de provincias en tiempo de ejecución [fin]

            animateDiv("300px", "300px", "100px", "400px");
            changeDataText("<h3><strong>Santa Elena</strong></h3>",
                "<strong>Trabajo cumplido en:</strong><br>Aguapen",
                "<a href='portafolio.html'>Mirar Portafolio</a>");
            changeStyles("solid 1px steelblue");
        }
        break;
    case provinciasEcuador.costa.elOro.addEventListener('click', activeElOro):
        function activeElOro() {

            //Fx(fade in Provincias)[inicio]
            animateProvinces(imgProvEcu.costa.elOro, "0", "1");
            imgProvEcu.costa.guayas.style.backgroundImage = "none";
            imgProvEcu.costa.santaElena.style.backgroundImage = "none";
            imgProvEcu.costa.manabi.style.backgroundImage = "none";
            imgProvEcu.sierra.azuay.style.backgroundImage = "none";
            imgProvEcu.sierra.bolivar.style.backgroundImage = "none";
            imgProvEcu.sierra.canar.style.backgroundImage = "none";
            imgProvEcu.sierra.cotopaxi.style.backgroundImage = "none";
            imgProvEcu.sierra.imbabura.style.backgroundImage = "none";
            imgProvEcu.sierra.loja.style.backgroundImage = "none";
            imgProvEcu.sierra.pichincha.style.backgroundImage = "none";
            //Fx(fade in Provincias)[fin]

            //animacion de provincias en tiempo de ejecución [inicio]
            imgProvEcu.costa.elOro.style.backgroundImage = linksImgs.elOro;
            //animacion de provincias en tiempo de ejecución [fin]
            animateDiv("300px", "300px", "100px", "250px");
            imgProvEcu.costa.elOro.style.animation = "showElOro 1s linear 1";
            imgProvEcu.costa.elOro.style.visibility = "visible";
            changeDataText("<h3><strong>El Oro</strong></h3>",
                "<strong>Trabajo cumplido en:</strong><br>Machala, Santa Rosa, Piñas, Portovelo, Zaruma, El Guabo, Arenillas",
                "<a href='portafolio.html'>Mirar Portafolio</a>");
            changeStyles("solid 1px steelblue");
        }
        break;
    case provinciasEcuador.costa.manabi.addEventListener('click', activeManabi):
        function activeManabi() {

            //Fx(fade in Provincias)[inicio]
            animateProvinces(imgProvEcu.costa.manabi, "0", "1");
            imgProvEcu.costa.guayas.style.backgroundImage = "none";
            imgProvEcu.costa.santaElena.style.backgroundImage = "none";
            imgProvEcu.costa.elOro.style.backgroundImage = "none";
            imgProvEcu.sierra.azuay.style.backgroundImage = "none";
            imgProvEcu.sierra.bolivar.style.backgroundImage = "none";
            imgProvEcu.sierra.canar.style.backgroundImage = "none";
            imgProvEcu.sierra.cotopaxi.style.backgroundImage = "none";
            imgProvEcu.sierra.imbabura.style.backgroundImage = "none";
            imgProvEcu.sierra.loja.style.backgroundImage = "none";
            imgProvEcu.sierra.pichincha.style.backgroundImage = "none";
            //Fx(fade in Provincias)[fin]

            //animacion de provincias en tiempo de ejecución [inicio]
            imgProvEcu.costa.manabi.style.backgroundImage = linksImgs.manabi;
            //animacion de provincias en tiempo de ejecución [fin]
            animateDiv("0px", "300px", "100px", "300px");
            imgProvEcu.costa.manabi.style.animation = "showManabi 1s linear 1";
            imgProvEcu.costa.manabi.style.visibility = "visible";
            changeDataText("<h3><strong>Manabí</strong></h3>",
                "<strong>Trabajo cumplido en:</strong><br>Pedernales, Jama, Manta, Jipijapa, Montecristi",
                "<a href='portafolio.html'>Mirar Portafolio</a>");
            changeStyles("solid 1px steelblue");
        }

    default:
        break;
}

//Casos Sierra
switch (provinciasEcuador) {
    case provinciasEcuador.sierra.canar.addEventListener('click', activeCanar):
        function activeCanar() {

            //Fx(fade in Provincias)[inicio]
            animateProvinces(imgProvEcu.sierra.canar, "0", "1");
            imgProvEcu.costa.guayas.style.backgroundImage = "none";
            imgProvEcu.costa.santaElena.style.backgroundImage = "none";
            imgProvEcu.costa.elOro.style.backgroundImage = "none";
            imgProvEcu.sierra.azuay.style.backgroundImage = "none";
            imgProvEcu.sierra.bolivar.style.backgroundImage = "none";
            imgProvEcu.costa.manabi.style.backgroundImage = "none";
            imgProvEcu.sierra.cotopaxi.style.backgroundImage = "none";
            imgProvEcu.sierra.imbabura.style.backgroundImage = "none";
            imgProvEcu.sierra.loja.style.backgroundImage = "none";
            imgProvEcu.sierra.pichincha.style.backgroundImage = "none";
            //Fx(fade in Provincias)[fin]

            //animacion de provincias en tiempo de ejecución [inicio]
            imgProvEcu.sierra.canar.style.backgroundImage = linksImgs.canar;
            //animacion de provincias en tiempo de ejecución [fin]
            animateDiv("0px", "300px", "100px", "325px");
            changeDataText("<h3><strong>Cañar</strong></h3>",
                "<strong>Trabajo cumplido en:</strong><br>Cañar, El Tambo, La Troncal",
                "<a href='portafolio.html'>Mirar Portafolio</a>");
            changeStyles("solid 1px steelblue");
        }
    case provinciasEcuador.sierra.cotopaxi.addEventListener('click', activeCotopaxi):
        function activeCotopaxi() {

            //Fx(fade in Provincias)[inicio]
            animateProvinces(imgProvEcu.sierra.cotopaxi, "0", "1");
            imgProvEcu.costa.guayas.style.backgroundImage = "none";
            imgProvEcu.costa.santaElena.style.backgroundImage = "none";
            imgProvEcu.costa.elOro.style.backgroundImage = "none";
            imgProvEcu.sierra.azuay.style.backgroundImage = "none";
            imgProvEcu.sierra.bolivar.style.backgroundImage = "none";
            imgProvEcu.costa.manabi.style.backgroundImage = "none";
            imgProvEcu.sierra.canar.style.backgroundImage = "none";
            imgProvEcu.sierra.imbabura.style.backgroundImage = "none";
            imgProvEcu.sierra.loja.style.backgroundImage = "none";
            imgProvEcu.sierra.pichincha.style.backgroundImage = "none";
            //Fx(fade in Provincias)[fin]

            //animacion de provincias en tiempo de ejecución [inicio]
            imgProvEcu.sierra.cotopaxi.style.backgroundImage = linksImgs.cotopaxi;
            //animacion de provincias en tiempo de ejecución [fin]
            animateDiv("300px", "300px", "100px", "400px");
            changeDataText("<h3><strong>Cotopaxi</strong></h3>",
                "<strong>Trabajo cumplido en:</strong><br>Latacunga",
                "<a href='portafolio.html'>Mirar Portafolio</a>");
            changeStyles("solid 1px steelblue");
        }
        break;
    case provinciasEcuador.sierra.imbabura.addEventListener('click', activeImbabura):
        function activeImbabura() {

            //Fx(fade in Provincias)[inicio]
            animateProvinces(imgProvEcu.sierra.imbabura, "0", "1");
            imgProvEcu.costa.guayas.style.backgroundImage = "none";
            imgProvEcu.costa.santaElena.style.backgroundImage = "none";
            imgProvEcu.costa.elOro.style.backgroundImage = "none";
            imgProvEcu.sierra.azuay.style.backgroundImage = "none";
            imgProvEcu.sierra.bolivar.style.backgroundImage = "none";
            imgProvEcu.costa.manabi.style.backgroundImage = "none";
            imgProvEcu.sierra.canar.style.backgroundImage = "none";
            imgProvEcu.sierra.cotopaxi.style.backgroundImage = "none";
            imgProvEcu.sierra.loja.style.backgroundImage = "none";
            imgProvEcu.sierra.pichincha.style.backgroundImage = "none";
            //Fx(fade in Provincias)[fin]

            //animacion de provincias en tiempo de ejecución [inicio]
            imgProvEcu.sierra.imbabura.style.backgroundImage = linksImgs.imbabura;
            //animacion de provincias en tiempo de ejecución [fin]
            animateDiv("300px", "300px", "100px", "400px");
            changeDataText("<h3><strong>Imbabura</strong></h3>",
                "<strong>Trabajo cumplido en:</strong><br>Ibarra",
                "<a href='portafolio.html'>Mirar Portafolio</a>");
            changeStyles("solid 1px steelblue");
        }
        break;
    case provinciasEcuador.sierra.bolivar.addEventListener('click', activeBolivar):
        function activeBolivar() {

            //Fx(fade in Provincias)[inicio]
            animateProvinces(imgProvEcu.sierra.bolivar, "0", "1");
            imgProvEcu.costa.guayas.style.backgroundImage = "none";
            imgProvEcu.costa.santaElena.style.backgroundImage = "none";
            imgProvEcu.costa.elOro.style.backgroundImage = "none";
            imgProvEcu.sierra.azuay.style.backgroundImage = "none";
            imgProvEcu.sierra.imbabura.style.backgroundImage = "none";
            imgProvEcu.costa.manabi.style.backgroundImage = "none";
            imgProvEcu.sierra.canar.style.backgroundImage = "none";
            imgProvEcu.sierra.cotopaxi.style.backgroundImage = "none";
            imgProvEcu.sierra.loja.style.backgroundImage = "none";
            imgProvEcu.sierra.pichincha.style.backgroundImage = "none";
            //Fx(fade in Provincias)[fin]

            //animacion de provincias en tiempo de ejecución [inicio]
            imgProvEcu.sierra.bolivar.style.backgroundImage = linksImgs.bolivar;
            //animacion de provincias en tiempo de ejecución [fin]
            animateDiv("0px", "300px", "100px", "300px");
            changeDataText("<h3><strong>Bolívar</strong></h3>",
                "<strong>Trabajo cumplido en:</strong><br>Guaranda, San Jose de chimbo, San Miguel",
                "<a href='portafolio.html'>Mirar Portafolio</a>");
            changeStyles("solid 1px steelblue");
        }
    case provinciasEcuador.sierra.azuay.addEventListener('click', activeAzuay):
        function activeAzuay() {

            //Fx(fade in Provincias)[inicio]
            animateProvinces(imgProvEcu.sierra.azuay, "0", "1");
            imgProvEcu.costa.guayas.style.backgroundImage = "none";
            imgProvEcu.costa.santaElena.style.backgroundImage = "none";
            imgProvEcu.costa.elOro.style.backgroundImage = "none";
            imgProvEcu.sierra.bolivar.style.backgroundImage = "none";
            imgProvEcu.sierra.imbabura.style.backgroundImage = "none";
            imgProvEcu.costa.manabi.style.backgroundImage = "none";
            imgProvEcu.sierra.canar.style.backgroundImage = "none";
            imgProvEcu.sierra.cotopaxi.style.backgroundImage = "none";
            imgProvEcu.sierra.loja.style.backgroundImage = "none";
            imgProvEcu.sierra.pichincha.style.backgroundImage = "none";
            //Fx(fade in Provincias)[fin]

            //animacion de provincias en tiempo de ejecución [inicio]
            imgProvEcu.sierra.azuay.style.backgroundImage = linksImgs.azuay;
            //animacion de provincias en tiempo de ejecución [fin]
            animateDiv("300px", "300px", "100px", "250px");
            changeDataText("<h3><strong>Azuay</strong></h3>",
                "<strong>Trabajo cumplido en:</strong><br>Cuenca, Nabón, Camilo Ponce Enriquez, El Pan, Chordeleg, Santa Isabel",
                "<a href='portafolio.html'>Mirar Portafolio</a>");
            changeStyles("solid 1px steelblue");
        }
        break;
    case provinciasEcuador.sierra.loja.addEventListener('click', activeLoja):
        function activeLoja() {
            //Fx(fade in Provincias)[inicio]
            animateProvinces(imgProvEcu.sierra.loja, "0", "1");
            imgProvEcu.costa.guayas.style.backgroundImage = "none";
            imgProvEcu.costa.santaElena.style.backgroundImage = "none";
            imgProvEcu.costa.elOro.style.backgroundImage = "none";
            imgProvEcu.sierra.bolivar.style.backgroundImage = "none";
            imgProvEcu.sierra.imbabura.style.backgroundImage = "none";
            imgProvEcu.costa.manabi.style.backgroundImage = "none";
            imgProvEcu.sierra.canar.style.backgroundImage = "none";
            imgProvEcu.sierra.cotopaxi.style.backgroundImage = "none";
            imgProvEcu.sierra.azuay.style.backgroundImage = "none";
            imgProvEcu.sierra.pichincha.style.backgroundImage = "none";
            //Fx(fade in Provincias)[fin]

            //animacion de provincias en tiempo de ejecución [inicio]
            imgProvEcu.sierra.loja.style.backgroundImage = linksImgs.loja;
            //animacion de provincias en tiempo de ejecución [fin]

            animateDiv("455px", "300px", "200px", "600px");
            interactiveData.interactiveData.style.left = "600px";
            changeDataText("<h3><strong>Loja</strong></h3>",
                "<strong>Trabajo cumplido en:</strong><br>Loja, Quilanga, Cariamanga",
                "<a href='portafolio.html'>Mirar Portafolio</a>");
            changeStyles("solid 1px steelblue");
        }
        break;
    case provinciasEcuador.sierra.pichincha.addEventListener('click', activePichincha):
        function activePichincha() {

            //Fx(fade in Provincias)[inicio]
            animateProvinces(imgProvEcu.sierra.pichincha, "0", "1");
            imgProvEcu.costa.guayas.style.backgroundImage = "none";
            imgProvEcu.costa.santaElena.style.backgroundImage = "none";
            imgProvEcu.costa.elOro.style.backgroundImage = "none";
            imgProvEcu.sierra.bolivar.style.backgroundImage = "none";
            imgProvEcu.sierra.imbabura.style.backgroundImage = "none";
            imgProvEcu.costa.manabi.style.backgroundImage = "none";
            imgProvEcu.sierra.canar.style.backgroundImage = "none";
            imgProvEcu.sierra.cotopaxi.style.backgroundImage = "none";
            imgProvEcu.sierra.azuay.style.backgroundImage = "none";
            imgProvEcu.sierra.loja.style.backgroundImage = "none";
            //Fx(fade in Provincias)[fin]

            //animacion de provincias en tiempo de ejecución [inicio]
            imgProvEcu.sierra.pichincha.style.backgroundImage = linksImgs.pichincha;
            //animacion de provincias en tiempo de ejecución [fin]

            animateDiv("300px", "300px", "100px", "400px");
            changeDataText("<h3><strong>Pichincha</strong></h3>",
                "<strong>Trabajo cumplido en:</strong><br>Quito",
                "<a href='portafolio.html'>Mirar Portafolio</a>");
            changeStyles("solid 1px steelblue");
        }
        break;

    default:
        break;
}