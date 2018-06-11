<?php
require_once "header.php";
require_once "database/connect.php";
require_once "database/table-users.php";
?>

<div class="card">
    <div class="card-title center grey"><strong style="color:white"><h5>Users</h5></strong></div>
    <div class="card-content">
        <table class="table table-striped table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Company</th>
                <th>Age</th>
                <th>Born</th>
                <th>Actions</th>
            </tr>
            <?php
            $users = loadUser($connection);
            foreach ($users as $user) :
            ?>
                <tr class="user">
                    <td class="id"><?= $user['id'] ?></td>
                    <td class="nome"><?= $user['name'] ?></td>
                    <td class="email"><?= $user['email'] ?></td>
                    <td class="company"><?= $user['company'] ?></td>
                    <td class="age"><?= $user['age'] ?></td>
                    <td class="born"> <?= $user['born'] ?></td>
                    <td>
                        <form action="remove_user.php" method="post">
                            <input type="hidden" name="id" value="<?= $user['id'] ?>">
                            <button type="submit" class="btn waves-effect waves-light red">Remove</button>
                        </form>
                    </td>
                </tr>
            <?php
            endforeach
            ?>
        </table>
    </div>
    <div class="card-action grey">
        <a href="add_user.php">
            <button class="waves-effect waves-light btn"><i class="material-icons">add</i> Add User</button>
        </a>
    </div>
</div>

<?php
require_once "footer.php"
?>
