<?php
    function loadUser($connection){
        $users = array();
        $result = mysqli_query($connection , "SELECT * FROM user");

        while($user = mysqli_fetch_assoc($result)){
            array_push($users, $user);
        }
        return $users ;
    }

    function insertUser($connection, $name, $email, $company ,$age, $born , $password){
        $query = "insert into user (name, email, company , age ,born, password) values ('{$name}', '{$email}','{$company}' , '{$age}' ,'{$born}' , '{$password}')" ;
        return mysqli_query($connection,$query) ;
    }

    function removeUser($connection, $id){
        $query = "delete from user where id = {$id}" ;
        return mysqli_query($connection, $query);
    }

?>