<?php
    require_once "header.php" ;
    $id = $_GET['id'] ;
    $name = $_GET['name'] ;
    $description = $_GET['description'];
    $price = $_GET['price'] ;
    $quantity = $_GET['quantity'] ;
?>
    <div class="card">
        <div style="background-color:grey; color:white" class="card-title center"><strong>Buy a item</strong></div>
        <div class="card-content">
            <p><strong> Item details</strong></p><br>
            <p><strong> ID: </strong><?= $id ?> </p>
            <p><strong>Name: </strong><?= $name ?></p>
            <p><strong>Description: </strong> <?= $description ?></p>
            <p><strong>Price: R$</strong><?= $price ?></p>
            <p><strong>Quantity in stock: </strong><?= $quantity ?></p>
            <form action="add_to_cart.php">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="hidden" name="name" value="<?= $name ?>">
                <input type="hidden" name="description" value="<?= $description ?>">
                <input type="hidden" name="price" value="<?= $price ?>">
                <input type="number" name="quantity_item">Quantity </input>
                <input type="hidden" name="quantity" value="<?= $quantity ?>"><br>
        </div>
        <div style="background-color:grey; color:white" class="card-action">
            
                <button type="submit" class="btn waves-effect waves-light">Buy</button>
            </form>
        </div>
    </div>
<?php
    require_once "footer.php"
?>