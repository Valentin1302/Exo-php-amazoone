<?php
require_once('./dbConnect.php');

if (!empty($conn)){


    $mail = $_POST["mail"];
    $password = $_POST["motDePasse"];

    $req = "SELECT * FROM users WHERE email = '$mail' AND psw = '$password'";
    
 
    $exec = $conn->query($req);

    if($exec != FALSE){

     $res = $exec->fetchAll(PDO::FETCH_ASSOC);
     if(!empty($res)){
          header('Location: ../views/products');
          // echo "Vous etes connecté";
        
        session_start();
        $_SESSION["connected"]= TRUE;
    }
   else{
        echo "Erreur de la requete";
   }
 
}
}
?>
