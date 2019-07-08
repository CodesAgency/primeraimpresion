let titleLabel = document.getElementById('titleLabel');
let titulo = document.getElementById('titulo');
let subtitulo = document.getElementById('subtitulo');
let video = document.getElementById('video');
let subtituloLabel = document.getElementById('subtituloLabel');
let inputRequerid = document.getElementById('inputRequerid');
let btn_enviar = document.getElementById('btn-enviar');

//"url('ul/redX.png')"

titulo.addEventListener('blur', showErrorT);
subtitulo.addEventListener('blur', showErrorSubT);
video.addEventListener('blur', showErrorVideo);
btn_enviar.addEventListener("click", btn_enviar_fx);

function btn_enviar_fx() {
    let inputRequerid = document.getElementById('inputRequerid');
    if (inputRequerid.checked = "true") {
        console.log('enviando datos');
    } else {

        location.href = "http://localhost/primeraimpresion/blog/index.php?r=post/create";
        alert('SI USTED NO CLIKEO EL ESTADO POR DEFAULT EL ESTADO SALDRÁ INACTIVO');

    }
}

function showErrorT() {
    if (titulo.value == "") {
        let showErrorTask = new recocnocimiento(titulo, "url('ul/redX.png')")
        showErrorTask.showError();
        titleLabel.innerHTML = "Este campo es requerido, debes escribir un Título";
        titleLabel.style.color = "red";
        titleLabel.style.fontSize = "10px";
        titleLabel.style.textAlign = "left";
    } else {
        let ShowOk = new recocnocimiento(titulo, "url('ul/greenV.png')")
        ShowOk.showOk();
    }
}

function showErrorSubT() {
    if (subtitulo.value == "") {
        let showErrorTaskSub = new recocnocimiento(subtitulo, "url('ul/orangeX.png')");
        showErrorTaskSub.showError();
        subtituloLabel.innerHTML = "Este campo no es muy importante, por eso la X es de color naranja su requerimiento es optativo depende ti.";
        subtituloLabel.style.color = "orange";
        subtituloLabel.style.fontSize = "10px";
        subtituloLabel.style.textAlign = "left";

    } else {
        let ShowOkSub = new recocnocimiento(subtitulo, "url('ul/greenV.png')")
        ShowOkSub.showOk();
    }
}

function showErrorVideo() {
    if (video.value == "") {
        let showErrorTaskVideo = new recocnocimiento(video, "url('ul/orangeX.png')")
        showErrorTaskVideo.showError();
    } else {
        let ShowOkSubVideo = new recocnocimiento(video, "url('ul/greenV.png')")
        ShowOkSubVideo.showOk();
    }
}

class recocnocimiento {

    constructor(objValueA, objValueB) {
        this.objValueA = objValueA;
        this.objValueB = objValueB;
    }

    showError() {
        this.objValueA.style.backgroundImage = this.objValueB;
        this.objValueA.style.backgroundRepeat = "no-repeat";
        this.objValueA.style.backgroundSize = "15px 15px";
        this.objValueA.style.backgroundPosition = "98% 15px";
    }

    showOk() {
        this.objValueA.style.backgroundImage = this.objValueB;
        this.objValueA.style.backgroundRepeat = "no-repeat";
        this.objValueA.style.backgroundSize = "15px 15px";
        this.objValueA.style.backgroundPosition = "98% 15px";
    }
}