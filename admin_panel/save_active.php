<?php
require_once "../database.php";
require_once "../login_register_logic/user.php";
require_once "UserRepository.php";

$userRepo = new UserRepository($db);
$user = $userRepo->find($_GET['user_id']);
$userRepo->updateActiveStatus($user);
var_dump($user);
header('Location: users.php');


?>