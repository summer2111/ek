<?php
session_start();
session_destroy();
$_SESSION = [];
header('location:login.php');
echo "Ihr Profil wurde gelösht.";
die;