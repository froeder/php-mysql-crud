<?php
    function loadUser($connection){
        $users = array();
        $result = mysqli_query($connection , "SELECT * FROM user");

        while($user = mysqli_fetch_assoc($result)){
            array_push($users, $user);
        }
        return $users ;
    }
    function insertUser($connection, $name, $email, $company ,$age, $born){
        $query = "insert into user (name, email, company , age ,born) values ('{$name}', '{$email}','{$company}' , '{$age}' ,'{$born}')" ;
        return mysqli_query($connection,$query) ;
    }
?>