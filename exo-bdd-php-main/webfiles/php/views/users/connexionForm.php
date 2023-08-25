        <?php
           require_once('../header.php');
        ?>
        
        <form action="../../actions/connexion.php" method="POST">
            <input type="email" name="mail" >
            <input type="password" name="motDePasse">
            <button type="submit">Se connecter</button>

        </form>
