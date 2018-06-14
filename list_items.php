<?php 
    require_once "header.php" ;
    require_once "database/connect.php" ;
    require_once "database/table-items.php" ;
?>

<div style="border-radius:20px 20px" class="card">
<div class="card-title center grey"><strong style="color:white"><h5>Items</h5></strong></div>
    <div class="card-content">
        <table class="table table-striped table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
            <?php 
                $items = loadItem($connection);
                foreach($items as $item) :
            ?>
            <tr class="items">
                <td class="id"><?= $item['id'] ?></td>
                <td class="name"><?= $item['name'] ?></td>
                <td class="description"><?= $item['description'] ?></td>
                <td class="price"><?= $item['price'] ?></td>
                <td class="quantity"><?= $item['quantity'] ?></td>
                <td>
                    <form action="buy_item.php">
                        <input type="hidden" name="id" value="<?= $item['id'] ?>">
                        <input type="hidden" name="name" value="<?= $item['name'] ?>">
                        <input type="hidden" name="description" value="<?= $item['description'] ?>">
                        <input type="hidden" name="price" value="<?= $item['price'] ?>">
                        <input type="hidden" name="quantity" value="<?= $item['quantity'] ?>">
                        <button type="submit" class="btn waves-effect waves-light">Buy</button>
                    </form>
                </td>
            </tr>
            <?php 
                endforeach
            ?>
        </table>
    </div>
    <div style="border-radius:0 0 20px 20px " class="card-action grey">
        <a href="add_item.php">
            <button class="waves-effect waves-light btn"><i class="material-icons">add</i> Add Item</button>
        </a>
    </div>
</div>


<?php 
    require_once "footer.php"
?>