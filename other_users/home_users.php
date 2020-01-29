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
    <link rel="stylesheet" href="../styleForm2.css">
    
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
                    <li><a href="create_potion.php">Create Potion</a></li>
                    <form action="logout.php"><a href="logout.php">Logout</a></form>
                </ul>
            </nav>
        </div>
    </header>
    <h2>Welcome back!</h2>
    <div class="suggest">
        <form action="store_suggested_potion.php" method="post">
            <label>You can suggest us a new potion!</label><br>
            <input type="text" id="name" name="potionName" placeholder="Enter new potion name.." required><br>
            <textarea name="txtArea" id="description" cols="30" rows="10" placeholder="Enter description for potion..." required></textarea><br>
            <input type="text" id="categoryInput" name="category" placeholder="Enter potion category.." required><br>
            <input type="url" id="urlInput" name="url" placeholder="Enter picture link..." required><br>
            <button class="btn btn-succes">Suggest Potion</button>
        </form>
    </div>    
</body>
</html>