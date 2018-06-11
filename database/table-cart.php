<?php
    function loadCart($connection){
        $carts = array();
        $result = mysqli_query($connection , "SELECT * FROM carts");

        while($cart = mysqli_fetch_assoc($result)){
            array_push($carts, $cart);
        }
        return $carts ;
    }

    function insertCart($connection, $product_id, $user_id, $product_price, $product_quantity){
        $query = "INSERT INTO carts (product_id, user_id, product_price, product_quantity) VALUES ({$product_id} , {$user_id} , {$product_price}, {$product_quantity})" ;
        return mysqli_query($connection, $query);
    }

    function removeCart($connection, $id){
        $query = "DELETE FROM carts WHERE id = {$id}" ;
        return mysqli_query($connection, $query);
    }

?>