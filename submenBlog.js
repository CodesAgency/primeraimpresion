let closeMenu = document.getElementById('buttonHistories');
let closeMenus = document.getElementById('closeSubMen');
closeMenu.addEventListener('click', showMenu);

let menLateral = document.getElementById('menublogLateral')

function showMenu() {
    myMove(-350, menLateral);
}

function myMove(posicion, vars) {
    var menublogLateral = vars;
    var pos = posicion;
    var id = setInterval(frame, 1);

    function frame() {
        if (pos === 0) {
            clearInterval(id);
        } else {
            pos++;
            menublogLateral.style.left = pos + 'px';
        }
    }
}

closeMenus.addEventListener('click', closeMenuss)

function closeMenuss() {
    var menublogLateral = menLateral;
    var pos = 0;
    var id = setInterval(frame, 1);

    function frame() {
        if (pos == -350) {
            clearInterval(id);
        } else {
            pos--;
            menublogLateral.style.left = pos + 'px';
        }
    }
}