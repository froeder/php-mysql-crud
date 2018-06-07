<?php
    require_once "./Utils/console_log.php";
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'phpcrud';
    $connection = mysqli_connect($host,$user , $password,$database);

    if($connection){
        logConsole('CONNECTION OK', 'null', true);
    }else{
        logConsole('CONNECTION ERROR', 'null', true);
    }
?>

