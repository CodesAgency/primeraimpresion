class createElementDiv {
    constructor(a, b, c, d, e) {
        this.a = a;
        this.b = b;
        this.c = c;
        this.d = d;
        this.e = e;
    }
    createObject() {
        let request = document.getElementById('request');
        let div = document.createElement(this.a);
        div.setAttribute('class', this.b);
        request.appendChild(div);
        div.style.padding = "15px";

        let input = document.createElement(this.c);
        input.setAttribute('rows', this.d);
        input.setAttribute('cols', this.e);
        div.appendChild(input);

        //button create
        let button = document.createElement('input');
        button.setAttribute('type', 'submit');
        button.setAttribute('class', 'btn btn-warning');
        button.setAttribute('value', 'Responder');
        div.appendChild(button);

        //style DIV
        div.style.display = "flex";
        div.style.flexDirection = "column";
        div.style.alignItems = "start";
        input.style.padding = "15px";
    }
}

let create = new createElementDiv('div', 'requestMean', 'textarea', '4', '75');