
<pre>
<?php
if($_SERVER['REQUEST_METHOD']!=="POST")
     die("Method not allowed!");

session_start();

require_once "../database.php";
require_once "user.php";
require_once "UserRepository.php";
require_once "RegistrationValidator.php";
// poziva odgovarajuce objekte iz klasa i vrsi validaciju korisnika

$validator = new RegistrationValidator();

$result = $validator->validate($db,$_POST);
//var_dump($result);
//var_dump($_POST);
if($result == false){
    $_SESSION['errors'] = $validator->errors;
   // var_dump($_SESSION['errors']);
    header('Location: sign_up.php');
    exit;
}
//echo "Test";
//upisuje korisnika u bazu u slucaju da je prosla validacija
$userRepo = new UserRepository($db);
$user = new User(
    NULL,
    $validator->username,
    $validator->name,
    $validator->surname,
    $validator->email,
    $validator->password_1,
    $validator->active,
);
$userRepo->add($user);
header('Location: login.php');

?>
</pre>