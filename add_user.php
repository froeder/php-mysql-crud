<?php 
    require_once "header.php"

?>
    
<div class="card">
    <div class="card-title center grey"><strong style="color:white"><h5>Add User</h5></strong></div>
        <div class="card-content">
            <div class="row">
                <form action="insert_user.php" class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input class="form-control" type="text" id="name" name="name">
                            <label for="name">Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">email</i>
                            <input class="form-control" type="email" id="email" name="email">
                            <label for="email">E-mail</label>
                        </div>
                    </div>
                    <div class="row">
                    <div class="input-field col s6">
                            <i class="material-icons prefix">business</i>
                            <input class="datepicker form-control" type="text" id="company" name="company">
                            <label for="company">Company Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">date_range</i>
                            <input class="datepicker form-control" type="date" id="born" name="born">
                            <label for="born">Born Date</label>
                        </div>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">lock</i>
                        <input class="datepicker form-control" type="password" id="password" name="password">
                        <label for="password">Password</label>
                    </div>
            </div>
        </div>
        <div class="card-action grey">
            <a href="list_users.php">
                <button type="button" class="btn waves-effect waves-light red">
                    <i class="material-icons">arrow_back</i>Back
                </button>
            </a>
            <button class="btn waves-effect waves-light" type="submit">Submit
                <i class="material-icons right">send</i>
            </button>
        </div>
        </form>
    </div>
</div>

<?php
    require_once "footer.php"
?>