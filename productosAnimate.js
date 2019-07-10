const imgAntracita = document.getElementById('imgAntracita');

const gloveObjects = {
    gloveAntracita: document.getElementById('gloveAntracita'),
}

function changeImageSrc(objects, opcion) {
    objects.style.display = opcion;
}

imgAntracita.addEventListener('click', showObjectsAntracita);
gloveObjects.gloveAntracita.addEventListener('click', hideObjectsAntracita);

function showObjectsAntracita() {
    //alert('leyendoEvento SHOW')
    animateGlove(gloveObjects.gloveAntracita, 0, 1, 1, 1, "translateY(50px)", "translateY(-70px)", "translateY(5px)", "translateY(0px)");
    changeImageSrc(gloveObjects.gloveAntracita, "block");

}

function hideObjectsAntracita() {
    // alert('leyendoEvento HIDE')
    animateGlove(gloveObjects.gloveAntracita, 1, 1, 1, 0, "translateY(0px)", "translateY(5px)", "translateY(-70px)", "translateY(50px)");
    setTimeout(() => {
        changeImageSrc(gloveObjects.gloveAntracita, "none")
    }, 1500);
}

let imgSilicica = document.getElementById('imgSilicica');
let gloveSilicica = document.getElementById('gloveSilicica');
imgSilicica.addEventListener('click', showimgSilicica);
gloveSilicica.addEventListener('click', hideimgSilicica);

function showimgSilicica() {
    //console.log('leyendo evento')
    animateGlove(gloveSilicica, 0, 1, 1, 1, "translateY(50px)", "translateY(-70px)", "translateY(5px)", "translateY(0px)");
    changeImageSrc(gloveSilicica, "block");
}


function hideimgSilicica() {
    //console.log('leyendo evento')
    animateGlove(gloveSilicica, 1, 1, 1, 0, "translateY(0px)", "translateY(5px)", "translateY(-70px)", "translateY(50px)");
    setTimeout(() => {
        changeImageSrc(gloveSilicica, "none")
    }, 1500);
}

//conos de acero
let imgConAcero = document.getElementById('imgConAncero');
let gloveAcero = document.getElementById('gloveAcero');
imgConAcero.addEventListener('click', showimgConAcero);
gloveAcero.addEventListener('click', hideimgConAcero);

function showimgConAcero() {
    //console.log('leyendo evento')
    animateGlove(gloveAcero, 0, 1, 1, 1, "translateY(50px)", "translateY(-70px)", "translateY(5px)", "translateY(0px)");
    changeImageSrc(gloveAcero, "block");
}

function hideimgConAcero() {
    //console.log('leyendo evento')
    animateGlove(gloveAcero, 1, 1, 1, 0, "translateY(0px)", "translateY(5px)", "translateY(-70px)", "translateY(50px)");
    setTimeout(() => {
        changeImageSrc(gloveAcero, "none")
    }, 1500);
}


function animateGlove(objects, o1, o2, o3, o4, t1, t2, t3, t4) {
    objects.animate([
        // keyframes
        {
            opacity: o1,
            transform: "rotate(0deg)",
            transform: t1
        },
        {
            opacity: o2,
            transform: "rotate(-15deg)",
            transform: t2
        },
        {
            opacity: o3,
            transform: "rotate(15deg)",
            transform: t3
        },
        {
            opacity: o4,
            transform: "rotate(0deg)",
            transform: t4
        }
    ], {
        // timing options
        duration: 1500,
        iterations: 1
    });
}