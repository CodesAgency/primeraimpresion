let titleLabel = document.getElementById('titleLabel');
let titulo = document.getElementById('titulo');
let subtitulo = document.getElementById('subtitulo');
//"url('ul/redX.png')"
console.log(titleLabel);
console.log(titulo);
console.log(subtitulo);

titulo.addEventListener('blur', showErrorT);

function showErrorT() {
    showError(titulo, "url('ul/redX.png')");
}

function showError(objValueA, objValueB) {
    objValueA.style.backgroundImage = objValueB;
    objValueA.style.backgroundRepeat = "no-repeat";
    objValueA.style.backgroundSize = "15px 15px";
    objValueA.style.backgroundPosition = "right";

}