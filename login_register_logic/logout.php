<?php
//logout sesija za druge korisnike
session_start();
session_destroy();
header('Location: /spw/login_register_logic/login.php');