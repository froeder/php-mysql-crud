<?php 
    require_once "header.php" ;
    require_once "database/connect.php" ;
    require_once "database/table-sales.php"
?>

<?php 
 $total = $_GET['total'] ;
 $data = $_GET['data'] ;
 $user_id = $_GET['user_id'] ;

 if(insertSale($connection, $user_id, $total, $data)){
    ?>
    
    <div class="card green">
        <div class="card-content">
            <h4 style="color:white" class="center">The product <?= $total ?> was been added. </h4>
        </div>
        <div class="card-action grey">
            <a href="list_items.php">
                <button class="btn waves-effect waves-light red">
                    <span style="color:black"><i class="material-icons">arrow_back</i> Back to shop</span>
                </button>
            </a>
            <a href="my_cart.php">
                <button class="btn waves-effect waves-light green">
                    <span style="color:black"><i class="material-icons">arrow_back</i>My cart</span>
                </button>
            </a>
        </div>
    </div>
    <?php } else { 
        $msg = mysqli_error($connection);	
    ?>
        <div class="card red">
            <div class="card-content">
                <h4 style="color:white" class="center">Error when try to add the product <?= $total ?>. </h4>
            </div>
            <div class="card-action grey">
                <a href="add_user.php">
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