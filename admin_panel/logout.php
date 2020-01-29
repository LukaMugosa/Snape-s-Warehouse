<?php
//logout sesija za admina
session_start();
session_destroy();
header('Location: /spw/login_register_logic/login.php');