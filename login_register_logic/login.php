<?php
    require_once "../database.php";

    session_start();

    $email= "";
    $password = "";
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
    }
   // echo $email." ".$password;
    
    $sql = "SELECT * FROM users WHERE email='$email' AND password = md5('$password') ";
   // echo $sql;
    $result = mysqli_query($db,$sql);
    $count = mysqli_num_rows($result);
    
    if(isset($_SESSION['login']) && $_SESSION['login']===true){
        header('Location: /spw/admin_panel/home.php');
        exit;
    }
    //provjerava da li je ulogovani korisnik Administrator ili obicni korisnik
    // i vrsi redirekciju na odgovarajacue stranice
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if($count>0 && $email==='potionmaster@gmail.com'){
            $_SESSION['login'] = true;
            header('Location: /spw/admin_panel/home.php');
            exit;
        }else if($count > 0 && $email!=='potionmaster@gmail.com'){
            header('Location: /spw/other_users/home_users.php');
            exit;
        }
        
        else
            $loginError = "Wrong email or password!";
    } 
    $query = "SELECT * FROM users WHERE email='$email'";
    $res = $db->query($query);
    $row = mysqli_fetch_array($res);
    $_SESSION['username'] = $row['username'];

    $q = "SELECT * FROM users WHERE email = '$email'";
    $r = $db->query($q);
    $row = mysqli_fetch_array($r);
    if($row['active'] === '0'){
        $loginError = "User is unactive!";
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="heading">
        <h1>Welcome to Professor Snape's Potions Warehouse</h1>
        
    </div>
    <div class="forma1">
        <form action="login.php" method="POST">
            <h4 id="lgn">Enter login information</h4><br>
            <input type="email" id="inputStyle" name="email"  placeholder="Enter your email.." required/><br>
            <input type="password" id="inputStyle" name="password" placeholder="Enter your password.." required/><br>
            <?php if(isset($loginError)){ ?>
                <p><?=$loginError?></p>
            <?php }?>
            <button name="login"class="btn btn-success dugme">Login</button><br>
            <p>Don't have an account?<a href="sign_up.php"><span>Sign up</span></a></p>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>