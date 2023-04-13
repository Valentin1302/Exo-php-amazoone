<?php
   require_once('../header.php');
   ?>

    <h1>Formulaire d'ajout de produits</h1>
    <form action="./scriptAjout.php" method="POST">
        <input type="text" name="nom_produit" placeholder="Le nom du produit">
        <input type="url" name="img_produit" placeholder="L'illustration du produit">
        <input type="number" name="prix_produit" placeholder="49.99">
        <button type="submit">Ajouter le produit</button>
    </form>
</body>
</html>
<?php
   require_once('../footer.php');
   ?>