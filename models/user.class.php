<?php
class User{
  
private $name;
private $email;
private $password;
private $date;

function __construct($name,$email,$password,$date){
$this->name = $name;
$this->email = addslashes($email);
$this->password = md5($password);
$this->date = $date;
}

public function ajouter(){ 

    include('../includes/connect_db.php');
        
        
        
        $req = $bdd->query("SELECT * FROM users WHERE email LIKE '$this->email'");
        $count = $req->rowCount();
        
        if ($count == 0) {
            //$type= intval($this->type);
            $req = $bdd->exec ("INSERT INTO `users`(`name`, `email`, `password`,`created_at`) VALUES 
            ('$this->name','$this->email','$this->password','$this->date')");
            
            echo'oui';
                    //return TRUE;
        } else {
                    echo'user already exist';
                    //return FALSE;
        }
}

    public function modifier($id){ 

    include('../includes/connect_db.php');

      //$id = isset($_GET['id_admin']) ? $_GET['id_admin'] : '';

        $r=$bdd->exec("UPDATE `users` SET `name`='$this->name',`email`='$this->email',`password`='$this->password' WHERE id=$id");
        echo'oui';
        //return TRUE;
 		}	
			
public function supprimer($id){ 
    

  include('../includes/connect_db.php');//.. maaneha okhrj mil dossier hedha w odkhel lil includ

    $req = $bdd->exec("DELETE FROM users WHERE id=$id"); 
 
		echo'oui';	
 
 
}


}


//$instance = new users($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>