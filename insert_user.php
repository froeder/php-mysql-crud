<?php
    require_once "header.php";
    require_once "database/connect.php";
    require_once "database/table-users.php";

    $name = $_GET["name"] ;
    $email = $_GET["email"] ;
    $born = $_GET["born"] ;
    $current_year = date("Y") ;
    list($year, $month, $day) = explode('-' , $born); //to get year from var born
    $bornYear = $year ;
    $age = $current_year - $bornYear ; 
 
    if(insertUser($connection, $name, $email, $age, $born )){
        ?>
		
        <div class="card green">
            <div class="card-content">
                <h4 style="color:white" class="center">The user <?= $name ?> was been added. </h4>
            </div>
        </div>
        <?php } else { 
            $msg = mysqli_error($connection);	
        ?>
            <div class="card red">
                <div class="card-content">
                    <h4 style="color:white" class="center">Error when try to add the user <?= $name ?>. </h4>
                </div>
            </div>
        <?php }
        ?>

<?php
    require_once "footer.php"
?>