<?php



if (isset($_POST['action'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
   
    if (($email=='admin') && ($password=='admin' )) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        
        header("location:../pages/dashboard.php?resultat=login");
    }
    else {
      
        header("location:../pages/sign-in.php?resultat=non");
    }
}


?>