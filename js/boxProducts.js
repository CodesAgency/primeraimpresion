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
        this.obj = obj;
        this.id = id;
        this.nameId = nameId;
        this.appendObj = appendObj;
    }
    descuento() {
        return (this.valorA - ((this.valorA * this.valorB) / 100));
    }
    createDiv(){
        const cDiv = document.createElement(this.obj);
    this.appendObj.appendChild(cDiv);
    cDiv.setAttribute(this.id, this.nameId);
    let div = document.getElementById(this.nameId);
    dataInputsConsole.Price.appendChild(div);
    div.innerHTML = "$" + this.descuento();
    div.style.textDecoration = "none";
    div.style.fontSize = "30pt";
    div.style.color = "#FF5D00";
    }
}

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
    let priceValue =  Number(dataInputsConsole.price.value);
    let descValue =  Number(dataInputsConsole.descuento.value);
    let MainClassJs = new mainClassJs(priceValue, descValue, 'div', 'id', 'div', dataInputsConsole.descripBox);
    MainClassJs.createDiv();
    dataInputsConsole.paraPrice.style.textDecoration = "line-through";
    dataInputsConsole.paraPrice.style.color= "gray";
}

function showTitleBox(objInst, obj) {
    objInst.innerHTML = obj;
}

function showPriceOn(objInst, obj) {
    objInst.innerHTML = `$ ${obj}`;
}