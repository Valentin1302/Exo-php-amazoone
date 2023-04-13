

    <?php
        require_once('../../actions/dbConnect.php');
        require_once('../header.php');
        
        // nom du cookie, la valeur du cookie, la durée de validité
        setcookie("toto" , "Bonjour je m'appelle toto", time()+15);
       
        if(!empty($_COOKIE["toto"])){
            echo"C'est moi toto !";
        }
        else{
            echo"C'est pas moi toto !";
        }
        if(!empty($conn)):
            /* echo "Connexion BDD réussie"; */
    ?>
    <header>
        <nav>
            <p class="logo">Amazoone</p>
            <ul>
                <li><a href="#">Flash</a></li>
                <li><a href="#">Basics</a></li>
                <li><a href="#">Cart. cadeaux</a></li>
                <li><a href="#">Coupons</a></li>
                <li><a href="#">Nouveau</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Beauté</a></li>
                <li><a href="../../actions/connexion.php">Connexion</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Ventes flash et promotions</h1>
        <div class="container">


            <!-- 
                Modèle de carte HTML à afficher pour chaque article issu de la BDD
                en prenant soin de mettre à jour : 
                - l'illustration, 
                - la description de l'image (alt)
                - le prix
                - le nom du produit

                Bon courage ! :)
            -->

            <?php 
                $exec = $conn->query("SELECT * FROM products");
                if($exec != false):

                $res = $exec->fetchAll(PDO::FETCH_ASSOC);

                foreach($res as $tuple):
            ?>
                <div class="card">
                <?php
                if(!empty($_SESSION) && $_SESSION["connected"] === TRUE){ ?>

                    
                    <form action="../../actions/products/scriptDelete.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $tuple["id"]; ?>">
                    <button type="submit">X</button>
                    </form>
                    <form action="./formUpdate.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $tuple["id"]; ?>">
                    <button type="submit">Modifier</button>
                    </form>
                <?php 
                }
                else{

                }?>
                    
                    <img 
                    src="<?= $tuple["img"]; ?>" 
                    alt="illustration de <?= $tuple["designation"]; ?>"
                    >
                    <p class="info"><?= $tuple["prix"]; ?> €&nbsp;-&nbsp;Vente flash</p>
                    <p class="product"><?= $tuple["designation"]; ?></p>
                    </div>
                <!-- Fin du modèle de carte -->
            <?php endforeach; ?>

            <?php else: ?>
                <p>Requete SQL non valide.</p>
            <?php endif;?>









            
            
        </div>
    </main>



    <?php endif; ?>
    <?php require_once('../footer.php');?>
</body>
</html>