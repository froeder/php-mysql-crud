<?php 
require_once "header.php"

?>
    
<div class="card">
    <div class="card-title center grey"><strong style="color:white"><h5>Add Item</h5></strong></div>
        <div class="card-content">
            <div class="row">
                <form action="insert_item.php" class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">assignment</i>
                            <input class="form-control" type="text" id="name" name="name">
                            <label for="icon_prefix">Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">attach_money</i>
                            <input class="form-control" type="number" id="price" name="price">
                            <label for="price">Price</label>
                        </div>
                    </div>
                    <div class="row">
                    <div class="input-field col s6">
                            <i class="material-icons prefix">format_align_left</i>
                            <input class="datepicker form-control" type="text" id="description" name="description">
                            <label for="description">Description</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">view_module</i>
                            <input class="datepicker form-control" type="number" id="quantity" name="quantity">
                            <label for="quantity">Quantity</label>
                        </div>
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