<?php
require_once('../models/user.class.php');
ob_start();
if (isset($_POST['action'])) {
    
    $name=$_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      
        $user = new User($_POST['name'],$_POST['email'],$_POST['password'],date("Y/m/d"));
        $user->ajouter();
       header("location:../pages/users.php?mess=ok");
       
    
    }
     else {
        header("location:../pages/addUser.php?mess=err");
     
    }
}

//exit();
?>