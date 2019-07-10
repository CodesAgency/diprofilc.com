var jumbotronLi = {
    titleProvinci: document.getElementById('titleProvinci'),
    siteOne: document.getElementById('siteOne'),
    siteTwo: document.getElementById('siteTwo'),
    siteThree: document.getElementById('siteThree'),
    siteFour: document.getElementById('siteFour'),
    siteFive: document.getElementById('siteFive'),
    siteSix: document.getElementById('siteSix'),
    siteSeven: document.getElementById('siteSeven'),
    miniShowProvs: document.getElementById('miniShowProvs')
}

let interactiveData = {
    interactiveData: document.getElementById('interactiveData'),
    interactiveDataMap: document.getElementById('interactiveDataMap'),
    interactiveDataLink: document.getElementById('interactiveDataLink'),
    interactiveDataTitle: document.getElementById('interactiveDataTitle'),
    interactiveDataParagraph: document.getElementById('interactiveDataParagraph')
}

function changeDataText(title, paragraph, link) {
    interactiveData.interactiveDataTitle.innerHTML = title;
    interactiveData.interactiveDataParagraph.innerHTML = paragraph;
    interactiveData.interactiveDataLink.innerHTML = link;
}

function changeStyles(borderColor) {
    interactiveData.interactiveData.style.padding = "10px";
    interactiveData.interactiveData.style.top = "300px";
    interactiveData.interactiveData.style.position = "absolute";
    interactiveData.interactiveData.style.borderRadius = "10px";
    interactiveData.interactiveData.style.backgroundColor = "rgba(219,219,219,0.95)";
    interactiveData.interactiveData.style.border = borderColor;
    interactiveData.interactiveData.style.borderLeft = "solid 20px steelblue";
    interactiveData.interactiveData.style.boxShadow = "2px 2px 9px gray";


}

function animateDiv(moveA, moveB, moveC, moveD) {
    interactiveData.interactiveData.animate([
        // keyframes
        { opacity: 0, top: moveA, left: moveC },
        { opacity: 1, top: moveB, left: moveD }
    ], {
        // timing options
        duration: 500,
        iterations: 1
    });
}

let linksImgs = {
    guayas: "url(map/guayas.png)",
    manabi: "url(map/manabi.png)",
    elOro: "url(map/el_oro.png)",
    azuay: "url(map/azuay.png)",
    bolivar: "url(map/bolivar.png)",
    imbabura: "url(map/imbabura.png)",
    canar: "url(map/canar.png)",
    cotopaxi: "url(map/cotopaxi.png)",
    loja: "url(map/lojas.png)",
    santaELena: "url(map/salinas.png)",
    pichincha: "url(map/pichincha.png)"
}