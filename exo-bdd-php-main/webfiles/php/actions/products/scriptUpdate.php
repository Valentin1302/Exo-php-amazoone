<?php 
    // Inclusion du fichier contenant les paramètres de connexion à la base de données
    require_once("../dbConnect.php");

    // Vérification si la connexion à la base de données a été établie avec succès
    if($conn){
        // Récupération des valeurs soumises via le formulaire (designation, prix, image, et id du produit à mettre à jour)
        $designation = $_POST["designation"];
        $prix = $_POST["prix"];
        $img = $_POST["image"];
        $id = $_POST["id"];

        // Construction de la requête SQL de mise à jour avec les valeurs récupérées du formulaire
        // Note : Il est important de noter que cette requête est vulnérable aux attaques par injection SQL.
        // Vous devriez utiliser des requêtes préparées pour éviter cela.
        $req = "UPDATE products SET designation = '$designation', img = '$img', prix = '$prix' WHERE id  = $id";

        // Exécution de la requête SQL en utilisant la connexion à la base de données
        $exec = $conn->query($req);

        // Vérification si la mise à jour dans la base de données a réussi
        if($exec != false){
            // Redirection vers la page "../actions/products" en cas de succès de la mise à jour
            header('Location: ../../views/products');
        }
    } else {
        // Connexion à la base de données n'a pas été établie avec succès
        // Affichage d'un message d'erreur
        echo "Bien joué tu es nul";
    }
?>
