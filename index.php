<?php
require_once "header.php";
require_once "database/connect.php";
require_once "database/table-users.php";
?>

    <div style="border-radius:0 20px" class="card">
        <div class="card-title"><h5 class="text-accent-1">Home</h5></div>
        <div class="card-content">
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="email" type="text" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="senha" type="password" class="validate">
                        <label for="senha">Password</label>
                    </div>
                </div>
                <div class="row">
                    <button type="button" class="btn waves-effect waves-light">Login</button>
                </div>
            </form>
            
            <div class="row">
                <a href="add_user.php"><button class="btn waves-effect waves-light">Register</button></a>
            </div>
        </div>
        
        </div>
    </div>


<?php
require_once "footer.php";
?>