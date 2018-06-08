<?php 
    require_once "header.php"

?>


<div class="card">
    <div class="card-title">Add User</div>
        <div class="card-content">
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix">Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">email</i>
                            <input id="email" type="email" class="validate">
                            <label for="icon_telephone">E-mail</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">date_range</i>
                            <input id="date" class="datepicker" type="date">
                            <label for="icon_telephone">Born Date</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-action">
            <button type="submit" class="waves-efect waves-light btn green"><i class="material-icons">save</i> SAVE</button>
            <button class="waves-efect waves-light btn red"><i class="material-icons">cancel</i> CANCEL</button>
        </div>
    </form>
    

</div>

<?php
    require_once "footer.php"
?>