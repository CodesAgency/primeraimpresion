<!DOCTYE html>
<html>
<head>
<?php 
$minr="10";
$horr="1";
?>
<script type="text/javascript">
//setInterval
var minr  = '<?php echo $minr; ?>';
var horr  = '<?php echo $horr; ?>';
var cronometro;
    function detenerse()
    {
        clearInterval(cronometro);
    }
 
    function carga()
    {
        contador_s =0;
        contador_m =0;
		contador_h =0;
		contador_d =0;

        s = document.getElementById("segundos");

        m = document.getElementById("minutos");
		
		h = document.getElementById("horas");
		
		d = document.getElementById("deteneer");
   //window.location="index.php";
        cronometro = setInterval(
            function(){
                if(contador_h==horr)
				{
				  if (contador_m==minr)
				window.location="index.php";
				}
				
				if(contador_s==60)

                {
				

                    contador_s=0;

                    contador_m++;

                    m.innerHTML = contador_m;
 
                    if(contador_m==60)

                    {
					
                        contador_m=0;
						contador_h++;
						h.innerHTML = contador_h;

                    }

                }

 
                s.innerHTML = contador_s;

               contador_s++;

 
            }

          ,1);

 

    }
    </script>

<style type="text/css">
<!--
.Estilo1 {color: #FFFFFF}
.Estilo2 {font-size: 16px}
-->
</style>
</head>

<body onload="carga()">

    <table width="6%"  border="0">
      <tr>
        <h1><td bordercolor="#CCCCCC" bgcolor="#999999"><p align="center" class="Estilo1 Estilo2">0:<span id="minutos">0</span>:<span id="segundos">0</span>
    </p></td><h1>
      </tr>
    </table>
    <p>&nbsp;
    </p>
    
    <input type="button" onclick="detenerse()" value="deternse"/>

</body>

</html>
