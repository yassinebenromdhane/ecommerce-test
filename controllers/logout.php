 <?php
 /*
if (isset($_POST['logout'])) {
    session_start();
    $_SESSION = array();
    session_destroy();
    header('location: ../pages/sign-in.php');
    exit;
}

*/
?> 


<?php
if(isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header('location: ../pages/sign-in.php');
}

?>