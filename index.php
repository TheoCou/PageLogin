<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./asset/Login_37128.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Abonnement</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

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
                    <li><input type="text" id="username" name="username"></li>
                    <li><label for="password">Mot de passe :</label></li>
                    <li><input type="password" id="password" name="password"></li>
                    <li><input type="submit" value="Envoyer"></li>
                </ul>

            </form>
        </section>

        <?php
        //inclusion
        include_once "./src/inscription_user.inc.php";
        ?>
        
    </main>



</body>

</html>