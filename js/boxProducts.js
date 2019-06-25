let dataInputsConsole = {
    title: document.getElementById('titleConsole'),
    titleBox: document.getElementById('titleBox'),
    price: document.getElementById('price'),
    Price: document.getElementById('Price'),
    descuento: document.getElementById('descuento'),
    apliDes: document.getElementById('apliDes')
}

class mathForm {
    constructor(valorA, valorB) {
        this.valorA = valorA;
        this.valorB = valorB;
    }
    descuento() {
        return (this.valorA * this.valorB) / 100;
    }
}

let restDesc = new mathForm(Number(document.getElementById('price').value), Number(document.getElementById('descuento').value));

dataInputsConsole.title.addEventListener('blur', showTitle)
dataInputsConsole.price.addEventListener('blur', showPrice)
dataInputsConsole.apliDes.addEventListener('click', apDescuento)

function showTitle() {
    showTitleBox(dataInputsConsole.titleBox, dataInputsConsole.title.value);
}

function showPrice() {
    showPriceOn(dataInputsConsole.Price, dataInputsConsole.price.value);
}

function apDescuento() {
    console.log(restDesc.descuento());

}

function showTitleBox(objInst, obj) {
    objInst.innerHTML = obj;
}

function showPriceOn(objInst, obj) {
    objInst.innerHTML = `$ ${obj}`;
}

function promocion(vA, vB) {
    var valorA = Number(vA);
    var valorB = Number(vB);
    let desc = (valorA * valorB) / 100;
    let restDesc = (vA - desc);
    console.log(restDesc);
}