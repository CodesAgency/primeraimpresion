let dataInputsConsole = {
    title: document.getElementById('titleConsole'),
    titleBox: document.getElementById('titleBox'),
    descripBox: document.getElementById('descripBox'),
    price: document.getElementById('price'),
    Price: document.getElementById('Price'),
    paraPrice: document.getElementById('paraPrice'),
    descuento: document.getElementById('descuento'),
    apliDes: document.getElementById('apliDes')
}

class mainClassJs {
    constructor(valorA, valorB, obj, id, nameId, appendObj) {
        this.valorA = valorA;
        this.valorB = valorB;
    }
    descuento() {
        return (this.valorA - ((this.valorA * this.valorB) / 100));
    }
}

dataInputsConsole.title.addEventListener('blur', showTitle);
dataInputsConsole.price.addEventListener('blur', showPrice);
dataInputsConsole.apliDes.addEventListener('click', apDescuento);

function showTitle() {
    showTitleBox(dataInputsConsole.titleBox, dataInputsConsole.title.value);
}

function showPrice() {
    showPriceOn(dataInputsConsole.Price, dataInputsConsole.price.value);
}

function apDescuento() {
    let priceValue = Number(document.getElementById('price').value);
    let descValue = Number(document.getElementById('descuento').value);
    let MainClassJs = new mainClassJs(priceValue, descValue);
    dataInputsConsole.Price.innerHTML = "$" + MainClassJs.descuento();
}~

function showTitleBox(objInst, obj) {
    objInst.innerHTML = obj;
}

function showPriceOn(objInst, obj) {
    objInst.innerHTML = `$ ${obj}`;
}