<?php

require_once "../database.php";
require_once "../login_register_logic/UserRepository.php";

$usersRepo = new UserRepository($db);
$users = $usersRepo->getAllUsers();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link rel="stylesheet" href="../potions/style3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css"/>
</head>
<body>
    <div class="center">Users</div>
    <table class="tabela2 col-lg-12 col-md-12 col-sm-12">
        <thead>
            <th>User ID</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Active</th>
            <th>Change Activity</th>
            <th>Save</th>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
            <tr id="somerow">
                <td><?=$user->id?></td>
                <td><?=$user->username?></td>
                <td><?=$user->first_name?></td>
                <td><?=$user->last_name?></td>
                <td><?=$user->email?></td>
                <td id="txt"><?php if($user->active === '1') echo "YES"; else echo "NO"; ?></td>
                <td><input type="checkbox" id="check">Active/Unactive</td>
                <td><a class="btn btn-sm btn-success" href="save_active.php"><i class="fa fa-save"></i>Save</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="app.js">
    </script>
</body>
</html>