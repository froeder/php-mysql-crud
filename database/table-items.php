<?php
    function loaditem($connection){
        $items = array();
        $result = mysqli_query($connection , "SELECT * FROM items");

        while($item = mysqli_fetch_assoc($result)){
            array_push($items, $item);
        }
        return $items ;
    }

    function insertItem($connection, $name, $description, $price, $quantity){
        $query = "INSERT INTO items (name, description, price, quantity) VALUES ('{$name}' , '{$description}' , {$price}, {$quantity})" ;
        return mysqli_query($connection, $query);
    }

    function removeItem($connection, $id){
        $query = "DELETE FROM items WHERE id = {$id}" ;
        return mysqli_query($connection, $query);
    }

?>