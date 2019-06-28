<?php
session_start();
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"ser");
$duracion="";
$res=mysqli_query($link,"select * from prueba WHERE id_prueba=1");
while($row=mysqli_fetch_array($res))
{
$duracion=$row["tiempo_duracion"];
}
$_SESSION["duracion"]=$duracion;
$_SESSION["start_time"]=date("Y-M-D H:i:s");
$end_time=$end_time=date('Y-m-d H:i:s', strtotime('+'.$_SESSION["duracion"].'minutes', strtotime($_SESSION["start_time"]) ));
$_SESSION["end_time"]=$end_time;
?>
<script type="text/javascript">
window.location="index.php";
</script>
