<?php
$conexion=mysqli_connect("localhost","root","","blog") or
    die("Problemas con la conexion");

if(!$conexion){
    echo "esta mal";
}

?>
