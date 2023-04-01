<?php 
require_once('./app/controller/UserController.php');
use App\Controller\UserController;
include('head.php'); ?>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="test.php">test</a>
          <li class="nav-item">
          <a class="nav-link" href="admin.php">admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="shop.php">shop</a>
        </li>
        <?php if (isset($_SESSION["user"])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="profile.php">profile</a>
          </li> 
        <?php }else { ?>
          <li class="nav-item">
            <a class="nav-link" href="register.php">register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">login</a>
          </li> 
          <?php } ?>
        </ul>
        <?php if (isset($_SESSION["user"])) { ?>
        <a class="logout btn btn-primary" href="logout.php">logout</a>
        <?php } ?>
    </div>
  </div>
</nav>
<div class="pt-5">




