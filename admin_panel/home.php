<?php
    /////////////////////////////////////
    // adminov home page/////////////////
    /////////////////////////////////////
    session_start();
    require_once "UserRepository.php";
    if(!isset($_SESSION['login']) || $_SESSION['login'] !== true)
        header('Location: /spw/login_register_logic/login.php');

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="style1.css">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <img src="../IMG/logo.png" alt="logo" class="logo">
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="../potions/potions.php">Potions</a></li>
                    <li><a href="users.php">Users</a></li>
                    <li><a href="../potions/add_potion.php">Add Potion</a></li>
                    <li><a href="../potions/create_potion.php">Create Potion</a></li>
                    <form action="logout.php"><a href="logout.php">Logout</a></form>
                </ul>
            </nav>
        </div>
    </header>
    <h2>Welcome back Professor!</h2>
    <div class="center">
        Suggested new potions: 
    </div>
    <table class="table_wrapper">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Potion name</th>
                <th>Picture</th>
                <th>View More</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <td>1</td>
            <td>Luka</td>
            <td>Alohamora</td>
            <td><img class="logo" src="../IMG/logo.png" alt=""></td>
            <td>More</td>
            <td>Pending</td>
        </tbody>
    </table>

</body>
</html>