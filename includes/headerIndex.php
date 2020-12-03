<?php session_start(); ?>

<!DOCTYPE html>
<html lang='fr'>

<head>
    <title> <?php echo $title; ?> - </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="style/style.css" rel="stylesheet" />
    <link href="../style/style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>



<body>
    <header>
        <nav class="amber lighten-2" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="index.php" class="brand-logo"><img class=" circle logo-img" src="img/ENx2EprXYAAoiXt.png" alt="logo"></a>
                <ul class="right hide-on-med-and-down">

                    <li <?php if ($title == 'Accueil') {echo "class='active'";}?>><a href="index.php" >Accueil</a></li>
                    <?php if (!isset($_SESSION['id'])) : ?>
                        <li <?php if ($title == 'Inscription') {echo "class='active'";}?>><a href="pages/inscription.php" >Inscription</a></li>
                        <li <?php if ($title == 'Connexion') {echo "class='active'";}?>><a href="pages/connexion.php" >Connexion</a></li>
                    
                        <?php else : ?>
                        <li <?php if ($title == 'Profil') {echo "class='active'";}?>><a href="pages/profil.php">Profil</a></li>
                        <li><a href="/discussion/pages/logout.php">Déconnexion</a></li>
                    <?php endif; ?>
                    
                    <li <?php if ($title == 'Discussion') {echo "class='active'";}?>><a href="pages/discussion.php">Salle de chat</a></li>
                </ul>

                <ul id="nav-mobile" class="sidenav">

                    <li <?php if ($title == 'Accueil') {echo "class='active'";}?>><a href="pages/index.php">Accueil</a></li>
                    <?php if (!isset($_SESSION['id'])) : ?>
                        <li <?php if ($title == 'Inscription') {echo "class='active'";}?>><a href="pages/inscription.php">Inscription</a></li>
                        <li <?php if ($title == 'Connexion') {echo "class='active'";}?>><a href="pages/connexion.php">Connexion</a></li>
                    
                        <?php else : ?>
                        <li <?php if ($title == 'Profil') {echo "class='active'";}?>><a href="pages/profil.php">Profil</a></li>
                        <li><a href="/discussion/pages/logout.php">Déconnexion</a></li>
                    <?php endif; ?>
                    
                    <li <?php if ($title == 'Discussion') {echo "class='active'";}?>><a href="pages/discussion.php">Salle de chat</a></li>
                </ul>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </header>