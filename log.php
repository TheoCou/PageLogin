<?php
include_once("./src/head.inc.php");
?>

<header>
    <h1>Fidelio &amp; compagny</h1>
</header>

<body>
    <main>
        <section class="container">
            <h2><span class="material-symbols-outlined">edit</span> Inscription rapide votre login &amp; mot de passe</h2>

            <form action="" method="post">
                <ul>
                    <li><label for="username">Adresse mail :</label></li>
                    <li><input type="text" id="username" name="login"></li>
                    <li><label for="password">Mot de passe :</label></li>
                    <li><input type="password" id="password" name="password"></li>
                    <li><input type="submit" value="Envoyer"></li>
                </ul>
            </form>
        </section>

        <?php
        include_once "./src/log.inc.php";
        ?>

    </main>
</body>
