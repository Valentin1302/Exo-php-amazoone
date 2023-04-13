<?php 

    // Connecter à la BDD

    require_once("../dbConnect.php");
    
    // Verifier que la connexion est bien effectuée
    // Si c'est le cas : 
    if(!empty($conn)){

        // Récupérer l'id issu du formulaire de suppression.
        $id = $_POST["id"];

        // Déclare la requête de suppression
        $req = "DELETE FROM products WHERE id=$id";

        $exec = $conn->query($req);

        if($exec != false){
            echo "Suppression effectuée";
        }
        else{
            echo "Requête invalide";
        }
    }
    // Le cas contraire : 
    else{
        // Afficher une erreur.
    }

?>