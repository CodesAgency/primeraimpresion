const getIds = {
    a: document.getElementById('f1'),
    b: document.getElementById('f2'),
    c: document.getElementById('f3'),
    g: document.getElementById('f4'),
    d: document.getElementById('a1'),
    e: document.getElementById('a2'),
    f: document.getElementById('a3')
}
getIds.d.addEventListener('mouseover', function() {
    getIds.d.style.cursor = "pointer";
    getIds.e.style.cursor = "pointer";
    getIds.f.style.cursor = "pointer";
})

function fade(animName) {
    getIds.b.style.animation = animName;
    getIds.c.style.animation = animName;
    getIds.g.style.animation = animName;
}

//Cambio de texto según opciones

function titleChange(title, selectTitleDiv) {
    selectTitleDiv.innerHTML = title;
}

//cambio de imagenes
const changeImage = (imgSrc, vars) => vars.src = imgSrc;

switch (getIds) {
    //Impresion Offset
    case getIds.d.addEventListener('click', getImage):
        function getImage() {
            fade("fade 1s linear 1");
            changeImage("images/calendario.png", getIds.b);
            changeImage("images/TARJETAS-BLANCAS-1024x1024.png", getIds.c);
            changeImage("images/SHOP-BAG.jpg", getIds.g);
            //title
            titles.titleOne.innerHTML = title.e;
            titles.titleTwo.innerHTML = title.b;
            titles.titleThree.innerHTML = title.d;
            //paragraph EDIT
            paragraph.p1.innerHTML = paragraphEdit.a;
            //paragraph.p2.innerHTML = "";
            paragraph.p3.innerHTML = paragraphEdit.b;
            //paragraph_b EDIT
            paragraph.p1a.innerHTML = paragraphEdit.a_1;
            paragraph.p3a.innerHTML = paragraphEdit.b_1;
        }
        break;
        //Impresion Digital
    case getIds.e.addEventListener('click', getImageB):
        function getImageB() {
            fade("fadeB 1s linear 1");
            changeImage("images/tarjeta-corporativa.jpg", getIds.c);
            changeImage("images/volantes-box.jpg", getIds.b);
            changeImage("images/etiquetas.jpg", getIds.g);
            //title
            titles.titleOne.innerHTML = title.a;
            titles.titleTwo.innerHTML = title.b;
            titles.titleThree.innerHTML = title.f;
            //paragraph EDIT
            paragraph.p1.innerHTML = paragraphEdit.volantes;
            paragraph.p2.innerHTML = paragraphEdit.c;
            paragraph.p3.innerHTML = paragraphEdit.adhesivos;
            //paragraph_b EDIT
            paragraph.p1a.innerHTML = paragraphEdit.volantesPrecio;
            paragraph.p2a.innerHTML = paragraphEdit.c_1;
            paragraph.p3a.innerHTML = paragraphEdit.adhesivosPrecio;
        }
        break;
    case getIds.f.addEventListener('click', getImageC):
        function getImageC() {
            fade("fadeC 1s linear 1");
            changeImage("images/backlit.jpg", getIds.g);
            changeImage("images/traslucida.jpg", getIds.c);
            changeImage("images/banner.jpg", getIds.b);
            //title
            titles.titleOne.innerHTML = title.g;
            titles.titleTwo.innerHTML = title.i;
            titles.titleThree.innerHTML = title.h;
            //paragraph EDIT
            paragraph.p1.innerHTML = paragraphEdit.lona;
            paragraph.p2.innerHTML = paragraphEdit.Lona_Reflectiva;
            paragraph.p3.innerHTML = paragraphEdit.backlite;
            //paragraph_b EDIT
            paragraph.p1a.innerHTML = paragraphEdit.lonaPrecio;
            paragraph.p2a.innerHTML = paragraphEdit.Lona_ReflectivaPrecio;
            paragraph.p3a.innerHTML = paragraphEdit.backlitePrecio;
        }
        break;

    default:
        break;
}