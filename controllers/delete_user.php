<?php
   include('../includes/connect_db.php');
if (isset($_GET['delete'])) {
    $id=$_GET['id'];
    $req1 = $bdd->exec("DELETE FROM users WHERE id=$id"); 
    header("location:../pages/users.php?resultat=suppoui");
    //exit();

}    

?>