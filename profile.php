<?php 
session_start();
if(!isset($_SESSION['user'])) {
    header('location:login.php');
    die;
}
include('./template/navbar.php');

?>

<h1>Welcome user <?=$_SESSION['user']?> </h1>

<a href="logout.php">logout""></a>

<?php include('./template/footer.php'); ?>