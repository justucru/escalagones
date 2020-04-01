<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Bienvenue sur Escalagones !</title>
</head>

<body>
    <header>
        <div class="btn-navigation">
            <div class="barre"></div>
            <div class="barre"></div>
            <div class="barre"></div>
        </div>

        <div class="body-header">
            <nav class="nav-bar-escalade">
                <ul id="navigation">
                    <li <?php if ($nav_en_cours == 'index') {echo ' id="en-cours"';} ?>><a href="index.php">Accueil</a></li>
                    <li <?php if ($nav_en_cours == 'interieur') {echo ' id="en-cours"';} ?>><a href="interieur.php">Intérieur</a></li>
                    <li <?php if ($nav_en_cours == 'exterieur') {echo ' id="en-cours"';} ?>><a href="exterieur.php">Extérieur</a></li>
                    <li <?php if ($nav_en_cours == 'ensemble') {echo ' id="en-cours"';} ?>><a href="grimperEnsemble.php">Grimper ensemble</a></li>
                    <li <?php if ($nav_en_cours == 'materiel') {echo ' id="en-cours"';} ?>><a href="materiel.php">Matériel</a></li>
                    <li <?php if ($nav_en_cours == 'contact') {echo ' id="en-cours"';} ?>><a href="contact.php" title="ouvre un formulaire de contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>