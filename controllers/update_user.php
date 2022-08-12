<?php
require_once('../models/User.class.php');
if (isset($_POST['action']) && isset($_GET['id'])) {

    $user = new User($_POST['name'],$_POST['email'],$_POST['password'],date("Y/m/d"));
    
    $user->modifier($_GET['id']);
     header("location:../pages/users.php?resultat=oui");
}
 
?>