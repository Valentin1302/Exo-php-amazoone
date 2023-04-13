<footer>

    <?php
    if (!empty($_COOKIE["rgpd"]) && $_COOKIE["rgpd"] === "accepted") {
        echo "Le cookie a été crée";
    } else { ?>

        <div>
            <p>Amazoone utilise les cookies</p>
            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit omnis recusandae doloremque deserunt excepturi tenetur voluptate repellat. Officiis, magni. Impedit, quia adipisci officia nisi rerum numquam non debitis aperiam sed. </p>
            <form action="../../actions/cookie.php" method="GET">
                <button type="submit">Accepter les cookies</button>
            </form>
        </div>
    <?php } ?>
    <p>Yohann MOY - TP Amazoone pour mes stagiaires de Soissons</p>

</footer>