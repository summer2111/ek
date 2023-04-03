
<?php
    include('./template/navbar.php'); 
    require_once('./app/controller/UserController.php');
    use App\Controller\UserController;
    session_start();
   
?>

<div class="container pt-3">
<h3>Herzlich Willkommen Anwendungsentwickler der DAA</h3>



<?php
if (isset($_POST["deleteProfile"])) {
        $userctr = new UserController();
        // $userctr->updatePasswordByEmail($_SESSION['user'], $userctr->hashPassword($_POST["password"]));
        $email = $_SESSION['user'];
        $userctr->deleteByEmail($email);
        echo "Ihr Profil " . $email . " wurde gelöscht.";
    }
?>

    
</div>



<?php include('./template/footer.php'); ?>