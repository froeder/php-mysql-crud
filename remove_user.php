<?php 
    require_once "header.php" ;
    require_once "database/table-users.php" ;
    require_once "database/connect.php" ;

    $id = $_POST["id"] ;
    removeUser($connection, $id);
    header("Location: list_users.php") ;
    die();
?>



<?php
    require_once "footer.php"
?>