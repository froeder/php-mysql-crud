<?php 
    require_once "header.php"

?>
    
<div class="card">
    <div class="card-title">Add User</div>
        <div class="card-content">
            <div class="row">
                <form action="insert_user.php" class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input class="form-control" type="text" id="icon_prefix" name="name">
                            <label for="icon_prefix">Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">email</i>
                            <input class="form-control" type="email" id="email" name="email">
                            <label for="icon_telephone">E-mail</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">date_range</i>
                            <input class="datepicker form-control" type="date" id="born" name="born">
                            <label for="icon_telephone">Born Date</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>
        </div>  
    </div>
</div>

<?php
    require_once "footer.php"
?>