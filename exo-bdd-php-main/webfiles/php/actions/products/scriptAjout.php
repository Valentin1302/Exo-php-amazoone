<?php 
   require_once("../dbConnect.php");
    
    if(!empty($conn)){

        $nom = $_POST["nom_produit"];
        $image = $_POST["img_produit"];
        $prix = $_POST["prix_produit"];

        $req = "INSERT INTO products (designation, img, prix) VALUES ('$nom', '$image', '$prix')";

        $exec = $conn->query($req);

        if($exec != false){
            echo "l'ajout a fonctionné";
        }
        else{
            echo "la requête n'a pas fonctionné";
        }
    }
    else{
        // Connexion à la BDD n'a pas fonctionnée
    }
?>