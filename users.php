<?php
    require_once "header.php";
    require_once "database/connect.php";
    require_once "database/table-users.php";
    require_once "Utils/console_log.php";
?>

<div class="card">
    <div class="card-title">Users</div>
    <div class="card-content">
        <table class="table table-striped table-bordered">
            <tr>
                <th>Name</th>
            </tr>
            <?php
            $users = loadUser($connection);
            foreach($users as $user) :
                ?>
                <tr class="paciente">
                    <td class="nome"><?= $user['name'] ?></td>
                </tr>
            <?php
            endforeach
            ?>
        </table>
    </div>
</div>

<?php
    require_once "footer.php"
?>
