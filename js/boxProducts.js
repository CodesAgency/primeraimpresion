let dataInputs = {
    title: document.getElementById('titleConsole'),
    titleValue: document.getElementById('titleConsole').value,
    image: document.getElementById('img').value,
}

class product {
    constructor(title, price, desc, file) {
        this.title = title;
        this.price = price;
        this.desc = desc;
        this.file = file;
    }
    createProductBox() {
        console.log(this.title);
    }
}

let products = new product("", "", "", dataInputs.titleValue);

dataInputs.title.addEventListener('blur', focusDown);

function focusDown() {
    products.createProductBox();
}