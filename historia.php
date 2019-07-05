<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?> </title>
    <style>
    *{
        box-sizing: border-box;
        margin: 0;
        font-family: helvetica;
    }
    #modal{
        margin: 15px;
    }
        #inputs{
            width: auto;
            height: auto;
            display: block;
            border: solid 1px gray;
            padding: 10px;
        }
        input{
            margin: 10px;
            width: 320px;
            height: 50px;
            padding: 10px;
        }
        textarea{
            margin: 10px;
            padding: 10px;
        }
        #interfaz{
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        
        
    </style>
</head>
<body>
    <div id="modal">
        <div id="inputs">
            <div id="interfaz">
                <div id="save">
                    <img src="imagesBlog/save.png" width="25px" height="25px" id="saveInterf" >
                </div>
                <div id="link-simbol">
                    <img src="imagesBlog/link-symbol.png" width="25px" height="auto">
                </div>
            </div>
            <form action="blog">
                <label for="title">Títular:</label>
            <input type="text" name="title" id="titles" placeholder="Título de la Publicación">
                <label for="Subtitle">Subtítulo:</label>
            <input type="text" name="Subtitle" id="Subtitles" placeholder="Subtítulo (Opcional)">
               
            <textarea rows = "25" cols = "36" name = "description">
         </textarea>
         </form>
        </div>
    </div>
    <div id="title"><?php echo $title ?></div>
    
</body>
</html>