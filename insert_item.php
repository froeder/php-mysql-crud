<?php
    require_once "header.php";
    require_once "database/connect.php";
    require_once "database/table-items.php";

    $name = $_GET["name"] ;
    $price = $_GET["price"] ;
    $description = $_GET["description"] ;
    $quantity = $_GET["quantity"] ;
 
    if(insertItem($connection, $name, $price, $description , $quantity )){
        ?>
		
        <div class="card green">
            <div class="card-content">
                <h4 style="color:white" class="center">The user <?= $name ?> was been added. </h4>
            </div>
            <div class="card-action grey">
                <a href="add_item.php">
                    <button class="btn waves-effect waves-light red">
                        <span style="color:black"><i class="material-icons">arrow_back</i> Back</span>
                    </button>
                </a>
                <a href="list_users.php">
                    <button class="btn waves-effect waves-light red">
                        <span style="color:black"><i class="material-icons">arrow_back</i>Back to List</span>
                    </button>
                </a>
            </div>
        </div>
        <?php } else { 
            $msg = mysqli_error($connection);	
        ?>
            <div class="card red">
                <div class="card-content">
                    <h4 style="color:white" class="center">Error when try to add the user <?= $name ?>. </h4>
                </div>
                <div class="card-action grey">
                    <a href="add_item.php">
                        <button class="btn waves-effect waves-light red">
                            <span style="color:black"><i class="material-icons">arrow_back</i> Back</span>
                        </button>
                    </a>
                </div>
            </div>
        <?php }
        ?>

<?php
    require_once "footer.php"
?>