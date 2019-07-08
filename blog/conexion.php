<?php
    $connect = mysqli_connect('104.238.110.236','primerai_andre','Mormon2012');
    if(!$connect){
        echo 'algo esta mal';
    }
    else{
        echo 'congratulations';
    }
?>