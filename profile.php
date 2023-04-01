<?php 
require_once('./app/controller/UserController.php');
use App\Controller\UserController;
session_start();
if(!isset($_SESSION['user'])) {
    header('location:login.php');
    die;
}
include('./template/navbar.php');

?>

<h1>Welcome <?=$_SESSION['user']?> </h1>



<h1>Profil bearbeiten</h1>
<div class="card flex m-5 p-5 bg-secondary">

<?php
    if (isset($_POST["editProfile"])) {
        $userctr = new UserController();
        if (isset($_POST["password"])) {
            $userctr->updatePasswordByEmail($_SESSION['user'], $userctr->hashPassword($_POST["password"]));
            echo "Ihr Passwort wurde geändert.";
        }
    }
?>


<form method="post" target="_self" class="mb-2">
  <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input  name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter new password" minlength="4">
  </div>

  <br>
  <button name="editProfile" type="submit" class="btn btn-primary">Speichern</button>
</form>
<form method="post" action="index.php">  
  <button name="deleteProfile" type="submit" class="btn btn-primary">Profil löschen</button>
</form>

</div>

<?php include('./template/footer.php'); ?>