<?php 
   // Inclusion du fichier contenant les paramètres de connexion à la base de données
   require_once("./dbConnect.php");
    
    // Vérification si la connexion à la base de données a été établie avec succès
    if(!empty($conn)){
        // Récupération de l'adresse e-mail soumise via le formulaire
        $mail = $_POST["amail"];

        // Récupération du mot de passe soumis via le formulaire
        $password = $_POST["pass"];

        // Hachage du mot de passe avec l'algorithme MD5 (obsolète, à éviter pour les mots de passe)
        $hashed = hash('md5' ,$password);

        // Construction de la requête SQL d'insertion avec les valeurs récupérées du formulaire
        $req = "INSERT INTO users (email, psw) VALUES ('$mail', '$hashed')";

        // Exécution de la requête SQL en utilisant la connexion à la base de données
        $exec = $conn->query($req);

        // Vérification si l'insertion dans la base de données a réussi
        if($exec != false){
            // Redirection vers la page "products" en cas de succès de l'inscription
            header('Location: ../views/products');
        }
        else{
            // Affichage d'un message en cas d'échec de l'inscription
            echo "l'inscription n'a pas fonctionné";
        }
    }
    else{
        // Connexion à la base de données n'a pas été établie avec succès
        // (Aucune gestion d'erreur explicite ici)
    }
?>
