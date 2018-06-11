<?php 
    require_once "header.php" ;
    require_once "database/connect.php" ;
    require_once "database/table-cart.php" ;
    $total = 0 ;
    $sale_total = 0 ;
?>

<div class="card">
<div class="card-title center grey"><strong style="color:white"><h5>My Items</h5></strong></div>
    <div class="card-content">
        <table class="table table-striped table-bordered">
            <tr>
                <th>ID User</th>
                <th>ID Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
            <?php 
                $items = loadCart($connection);
                foreach($items as $item) :
            ?>
            <tr class="items">
                <td class="id"><?= $item['user_id'] ?></td>
                <td class="name"><?= $item['product_id'] ?></td>
                <td class="description"><?= $item['product_price'] ?></td>
                <td class="price"><?= $item['product_quantity'] ?></td>
                <td> <?php $total = $item['product_price'] * $item['product_quantity'] ; $sale_total = $sale_total + $total ;echo $total ?> </td>
            </tr>
            <?php 
                $user_id = $item['user_id'] ;
                $total = $sale_total ;
                $data = '02/02/2018' ;

                endforeach
            ?>
            <tr>
                <td colspan="4">
                    <form action="add_sale.php">
                        <input type="hidden" name="user_id" value="<?= $user_id ?>">
                        <input type="hidden" name="total" value="<?= $sale_total  ?>">
                        <input type="hidden" name="data" value="<?= $data ?>">
                        <button type="submit" class="btn waves-effect waves-light">Close</button>
                    </form>
                </td>
                <td colspan="1">
                    <?= $sale_total ?>
                </td>
            </tr>
            
        </table>
    </div>
</div>


<?php 
    require_once "footer.php"
?>