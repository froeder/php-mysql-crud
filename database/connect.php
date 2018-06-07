<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'phpcrud';
    $connection = mysqli_connect($host,$user , $password,$database);

    if($connection){
        echo 'CONECTION OK';
    }else{
        echo 'CONECTION ERROR';
    }
?>

