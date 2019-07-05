var getPicture = {
    a: document.getElementById('lienzo'),
    b: document.getElementById('preview-link'),
    c: document.getElementById('')
}


/*getPicture.b.innerHTML = "<< PREVIEW"
getPicture.b.style.fontSize = "18pt"
getPicture.b.style.cursor = "pointer"
getPicture.b.style.textDecoration = "underline"*/

let getShot = document.getElementById('file-send')

getShot.onchange = function(e) {
    //objeto file reader
    let reader = new FileReader()
        //leemos el archivo
    reader.readAsDataURL(e.target.files[0])
        //mostramos en el lienzo
    reader.onload = function() {
        let preview = document.getElementById('lienzo')
        let img = document.createElement('img')

        img.src = reader.result
        img.setAttribute("id", "imgCreate")

        preview.append(img)
        adaptableImage()

        function adaptableImage() {
            let imgIDchange = document.getElementById('imgCreate')
                //console.log(imgIDchange)
            imgIDchange.style.width = "250px"
            imgIDchange.style.height = "250px"
        }
    }
}