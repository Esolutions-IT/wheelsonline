document.getElementById("bmwvelgenimage").addEventListener("mouseover", function() {
    document.body.style.backgroundImage = "url(../resources/assets/images/velgen_background.jpg)";
    document.getElementById("button").style.opacity = "1";
    document.getElementById("info").style.opacity = "1";
}, false);
document.getElementById("bmwvelgenimage").addEventListener("mouseout", function() {
    document.body.style.backgroundImage = "url(../resources/assets/images/bmw-back.jpg)";
    document.getElementById("button").style.opacity = "0";
    document.getElementById("info").style.opacity = "0";
}, false);

document.getElementById("bmwreparatie").addEventListener("mouseover", function() {
    document.body.style.backgroundImage = "url(../resources/assets/images/reparatie_back.jpg)";
}, false);
document.getElementById("bmwreparatie").addEventListener("mouseout", function() {
    document.body.style.backgroundImage = "url(../resources/assets/images/bmw-back.jpg)";
}, false);

document.getElementById("onderdelen").addEventListener("mouseover", function() {
    document.body.style.backgroundImage = "url(../resources/assets/images/onderdelen.jpg)";
}, false);
document.getElementById("onderdelen").addEventListener("mouseout", function() {
    document.body.style.backgroundImage = "url(../resources/assets/images/bmw-back.jpg)";
}, false);


function showvelgenin() {
    document.getElementById("velgen-text").style.display = "block";
    document.body.style.backgroundImage = "url(../resources/assets/images/velgen_background.jpg)";
    document.body.style.boxShadow = "inset 0px 0px 30px 500px rgba(0,0,0,0.5)";
}
function showvelgenout() {
    document.getElementById("velgen-text").style.display = "none";
    document.body.style.backgroundImage = "url(../resources/assets/images/bmw-back.jpg)";
    document.body.style.boxShadow = "none";

}

function showonderdelenin() {
    document.getElementById("onderdelen-text").style.display = "block";
    document.body.style.backgroundImage = "url(../resources/assets/images/onderdelen.jpg)";
    document.body.style.boxShadow = "inset 0px 0px 30px 500px rgba(0,0,0,0.5)";
}
function showonderdelenout() {
    document.getElementById("onderdelen-text").style.display = "none";
    document.body.style.backgroundImage = "url(../resources/assets/images/bmw-back.jpg)";
    document.body.style.boxShadow = "none";
}

function showreparatiein() {
    document.getElementById("reparatie-text").style.display = "block";
    document.body.style.backgroundImage = "url(../resources/assets/images/reparatie_back.jpg)";
    document.body.style.boxShadow = "inset 0px 0px 30px 500px rgba(0,0,0,0.5)";
}
function showreparatieout() {
    document.getElementById("reparatie-text").style.display = "none";
    document.body.style.backgroundImage = "url(../resources/assets/images/bmw-back.jpg)";
    document.body.style.boxShadow = "none";
}

function showkoopjeshoekin(){
    document.getElementById("koopjeshoek-text").style.display = "block";
    document.body.style.backgroundImage = "url(../resources/assets/images/uitverkoop.jpg)";
    document.body.style.boxShadow = "inset 0px 0px 30px 500px rgba(0,0,0,0.5)";
}
function showkoopjeshoekout() {
    document.getElementById("koopjeshoek-text").style.display = "none";
    document.body.style.backgroundImage = "url(../resources/assets/images/bmw-back.jpg)";
    document.body.style.boxShadow = "none";
}
function velgenomhoog() {
    document.getElementById("bmwvelgenimage").style.width = "420px";
    document.getElementById("bmwvelgenimage").style.marginTop = "-100px";
    document.getElementById("bmwvelgenimage").style.opacity = "1";
    document.getElementById("button").style.opacity = "1";
    document.getElementById("info").style.opacity = "1";
    document.body.style.backgroundImage = "url(../resources/assets/images/velgen_background.jpg)";
    document.body.style.boxShadow = "inset 0px 0px 30px 500px rgba(0,0,0,0.5)";
    document.getElementById("velgen-text").style.display = "block";

}
function velgenomlaag() {
    document.getElementById("bmwvelgenimage").style.width = "400px";
    document.getElementById("bmwvelgenimage").style.marginTop = "-50px";
    document.getElementById("bmwvelgenimage").style.opacity = "0.8";
    document.getElementById("button").style.opacity = "0";
    document.getElementById("info").style.opacity = "0";
    document.body.style.backgroundImage = "url(../resources/assets/images/bmw-back.jpg)";
    document.body.style.boxShadow = "none";
    document.getElementById("velgen-text").style.display = "none";
}
function velgenomhooginfo() {
    document.getElementById("bmwvelgenimage").style.width = "420px";
    document.getElementById("bmwvelgenimage").style.marginTop = "-100px";
    document.getElementById("bmwvelgenimage").style.opacity = "1";
    document.getElementById("info").style.opacity = "1";
    document.getElementById("button").style.opacity = "1";
    document.body.style.backgroundImage = "url(../resources/assets/images/velgen_background.jpg)";
    document.body.style.boxShadow = "inset 0px 0px 30px 500px rgba(0,0,0,0.5)";
    document.getElementById("velgen-text").style.display = "block";

}
function velgenomlaaginfo() {
    document.getElementById("bmwvelgenimage").style.width = "400px";
    document.getElementById("bmwvelgenimage").style.marginTop = "-50px";
    document.getElementById("bmwvelgenimage").style.opacity = "0.8";
    document.getElementById("info").style.opacity = "0";
    document.getElementById("button").style.opacity = "0";
    document.body.style.backgroundImage = "url(../resources/assets/images/bmw-back.jpg)";
    document.body.style.boxShadow = "none";
    document.getElementById("velgen-text").style.display = "none";
}

function showInfo() {
    var advices = ["Hier komt info over de velgen die Wheelsonline verkoopt!!!!"];

    $('#pContainer p.hide')
        .text(advices)
        .removeClass('hide')
        .addClass('show')
        .siblings('p')
        .removeClass('show')
        .addClass('hide');
}