<?php
    function loadSale($connection){
        $sales = array();
        $result = mysqli_query($connection , "SELECT * FROM sales");

        while($sale = mysqli_fetch_assoc($result)){
            array_push($sales, $sale);
        }
        return $sales ;
    }

    function insertSale($connection, $user_id, $total, $data){
        $query = "INSERT INTO sales (user_id, total, data) VALUES ({$user_id} , {$total} , {$data})" ;
        return mysqli_query($connection, $query);
    }

    function removeSale($connection, $id){
        $query = "DELETE FROM sales WHERE id = {$id}" ;
        return mysqli_query($connection, $query);
    }

?>