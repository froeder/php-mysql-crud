<?php
    function loadUser($connection){
        $users = array();
        $result = mysqli_query($connection , "SELECT * FROM user");

        while($user = mysqli_fetch_assoc($result)){
            array_push($users, $user);
        }
        return $users ;
    }

?>