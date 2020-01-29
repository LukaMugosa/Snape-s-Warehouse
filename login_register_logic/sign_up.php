<?php
//forma za registraciju korisnika i validaciju
session_start();
$errors = [];

if(isset($_SESSION['errors'])){
    $errors = $_SESSION['errors'];
   // var_dump($errors);
    unset($_SESSION['errors']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="forma2">
        <form action="register.php" method="POST">
            <h3 id="heading2">Please fill information for your registration</h3>
            <input type="text" id="inputStyle" name="name" placeholder="Enter your name.."><br>
            <?php if(array_key_exists("name",$errors)): ?>
                <div class="errors">
                    <?php foreach($errors['name'] as $errMsg): ?>
                        <div><?=$errMsg?></div>
                    <?php endforeach;?>
                </div>
            <?php endif;?>
            <input type="text" id="inputStyle" name="surname" placeholder="Enter your surname.." required><br>
            <?php if(array_key_exists("surname",$errors)): ?>
                <div class="errors">
                    <?php foreach($errors['surname'] as $errMsg): ?>
                        <div><?=$errMsg?></div>
                    <?php endforeach;?>
                </div>
            <?php endif;?>
            <input type="email" id="inputStyle"name="email" placeholder="Enter your email adress.." required><br>
            <?php if(array_key_exists("email",$errors)): ?>
                <div class="errors">
                    <?php foreach($errors['email'] as $errMsg): ?>
                        <div><?=$errMsg?></div>
                    <?php endforeach;?>
                </div>
            <?php endif;?>
            <input type="text" id="inputStyle" name="username" placeholder="Enter your userame.." required><br>
            <?php if(array_key_exists("username",$errors)): ?>
                <div class="errors">
                    <?php foreach($errors['username'] as $errMsg): ?>
                        <div><?=$errMsg?></div>
                    <?php endforeach;?>
                </div>
            <?php endif;?>
            <input type="password" id="inputStyle" name="password_1" placeholder="Enter your password.." required><br>
            <?php if(array_key_exists("password_1",$errors)): ?>
                <div class="errors">
                    <?php foreach($errors['password_1'] as $errMsg): ?>
                        <div><?=$errMsg?></div>
                    <?php endforeach;?>
                </div>
            <?php endif;?>
            <input type="password" id="inputStyle" name="password_2"placeholder="Repeat your password.." required><br>
            <?php if(array_key_exists("password_2",$errors)): ?>
                <div class="errors">
                    <?php foreach($errors['password_2'] as $errMsg): ?>
                        <div><?=$errMsg?></div>
                    <?php endforeach;?>
                </div>
            <?php endif;?>
            <button class="btn btn-success dugme" name="register">Register</button><br>
            <p>Already a member? <a href="login.php"><span>Sign in</span></a></p>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>