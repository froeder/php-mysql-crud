<?php
    require_once "header.php";
    require_once "database/connect.php";
    require_once "database/table-users.php";
?>

<div class="card">
    <div class="card-title">Users</div>
    <div class="card-content">
        <table class="table table-striped table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Age</th>
                <th>Born</th>
            </tr>
            <?php
            $users = loadUser($connection);
            foreach($users as $user) :
                ?>
                <tr class="user">
                    <td class="id"><?= $user['id'] ?></td>
                    <td class="nome"><?= $user['name'] ?></td>
                    <td class="email"><?= $user['email'] ?></td>
                    <td class="age"><?= $user['age'] ?></td>
                    <td class="born"> <?= $user['born'] ?></td>
                </tr>
            <?php
            endforeach
            ?>
        </table>
    </div>
    <div class="card-action">
        <a href="add_user.php"><button class="waves-effect waves-light btn">Add User</button></a>
    </div>
</div>

<?php
    require_once "footer.php"
?>
