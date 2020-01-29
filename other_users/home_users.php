<?php

//Home page za ostale korisnike
session_start();
//var_dump($_SESSION);
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    unset($_SESSION['username']);
}

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
                    <li><a href="suggest.php">Potions</a></li>
                    <li><a href="create_potion.php">Create Potion</a></li>
                    <form action="logout.php"><a href="logout.php">Logout</a></form>
                </ul>
            </nav>
        </div>
    </header>
    <h2>Welcome back!</h2>
    
</body>
</html>