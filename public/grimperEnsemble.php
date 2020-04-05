<?php $nav_en_cours = 'ensemble'; ?>
<?php

include '_header.php';

require_once '../connec.php';
$pdo = new PDO(DSN, USER, PASS);

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$firstname = $lastname = $email = "";
$firstnameErr = $lastnameErr = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstname"])) {
        $firstnameErr = "*A name is required.";
    } else {
        $firstname = test_input($_POST["firstname"]);
    }
    if (empty($_POST["lastname"])) {
        $lastnameErr = "*A name is required.";
    } else {
        $lastname = test_input($_POST["lastname"]);
    }
    if (empty($_POST["email"])) {
        $emailErr = "*An email is required.";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "*Invalid email format";
        }
    }
    if ($_POST["gridRadios"] == 'F') {
        $gender = 'F';
    } elseif ($_POST["gridRadios"] == 'M') {
        $gender = 'M';
    }
    if ($_POST["topic-select"] == 'debutant') {
        $level = 'debutant';
    } elseif ($_POST["topic-select"] == 'pratique reguliere') {
        $level = 'pratique reguliere';
    } elseif ($_POST["topic-select"] == 'experimente') {
        $level = 'experimente';
    }
    if ($firstnameErr == "" && $lastnameErr == "" && $emailErr == "") {
        $query = "INSERT INTO grimpeur (firstname, lastname, level, gender, email) VALUES (:firstname, :lastname, :level, :gender, :email)";
        $statement = $pdo->prepare($query);
        $statement->bindValue(":firstname", $firstname, PDO::PARAM_STR);
        $statement->bindValue(":lastname", $lastname, PDO::PARAM_STR);
        $statement->bindValue(":level", $level, PDO::PARAM_INT);
        $statement->bindValue(":gender", $gender, PDO::PARAM_INT);
        $statement->bindValue(":email", $email, PDO::PARAM_INT);
        $statement->execute();
        header("location: grimperEnsemble.php");
    }
}

$query = "SELECT * FROM grimpeur";
$statement = $pdo->query($query);
$grimpeurs = $statement->fetchAll(PDO::FETCH_ASSOC);

$levels = ['debutant', 'pratique réguliere', 'experimente'];



?>


    <main xmlns="http://www.w3.org/1999/html">
    <h2>Grimper Ensemble</h2>

    <!-- Partie événements -->
    <div class="titresEnsemble">
        <h3>Les évènements à venir</h3>
    </div>

    <section class="sectionCards">
        <!-- Evènement 1-->
        <div class="card" style="width: 18rem;">
                <img src="images/gd_climber_force.jpg" class="card-img-top" alt="Une personne escalade un mur en intérieur">
            <div class="card-body">
                <h5 class="card-title">Challenge Grimpe</h5>
                <p>Rejoignez-nous ce samedi 14 mars pour notre nouveau challenge chronométré : un.e seul.e grimpeur.se sera gagnant.e !</p>
                <a href="#" class="btn btn-success cardButton">Voir l'événement</a>
            </div>
        </div>
        <!-- Evènement 2-->
        <div class="card" style="width: 18rem;">
                <img src="images/gd_iceClimb.jpg" class="card-img-top" alt="Deux grimpeurs sur une cascade gelée">
            <div class="card-body">
                <h5 class="card-title">Ice Climbing !</h5>
                <p>Dimanche 22 mars, nous vous proposons de venir affronter les torrents glacés des Alpes. Au programme, escalade d'une cascade gelée, qui promet pas mal de frissons !</p>
                <a href="#" class="btn btn-success cardButton">Voir l'événement</a>
            </div>
        </div>
        <!-- Evènement 3-->
        <div class="card" style="width: 18rem;">
                <img src="images/gd_enFamille.png" class="card-img-top" alt="Deux enfants font de l'escalade">
            <div class="card-body">
                <h5 class="card-title">Grimper avec vos Gones !</h5>
                <p>Samedi 28 mars: parents, faites découvrir votre passion à vos enfants !</p>
                <p>Ils auront accès à un mur dédié, accompagnés d'un.e animateur.trice, en toute sécurité. Activités accessibles aux enfants à partir de 4 ans.</p>
                <a href="#" class="btn btn-success cardButton">Voir l'événement</a>
            </div>
        </div>
    </section>

    <!-- Section pour trouver un partenaire de grimpe -->
    <div class="titresEnsemble">
        <h3>Trouver un.e partenaire de grimpe !</h3>
    </div>
    <section class="sectionCards">
        <?php foreach ($grimpeurs as $grimpeur => $infos): ?>
            <?php
            if ($grimpeurs[$grimpeur]['gender'] == 'F') {
                $noun = 'grimpeuse';
                $accordAdj = 'e';
                $pronoun = 'la';
            } elseif ($grimpeurs[$grimpeur]['gender'] == 'M') {
                $noun = 'grimpeur';
                $accordAdj = '';
                $pronoun = 'le';
            }
            ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $grimpeurs[$grimpeur]['firstname']; ?> </h5>
                <p class="card-text"><?= $grimpeurs[$grimpeur]['firstname'] . ", " . $noun . " " . $grimpeurs[$grimpeur]['level'] . $accordAdj . " cherche un.e partenaire de grimpe, contactez-" . $pronoun . " ici !" ;?></p>
                <a href="#" class="btn btn-success cardButton"><?= ucfirst($pronoun) . " contacter" ;?></a>
            </div>
        </div>
        <?php endforeach; ?>
    </section>
    <section class="nouveau-partenaire"
        <div>
            <p>Vous cherchez un.e partenaire et souhaitez apparaître sur le site ?
            <br> Renseignez vos informations ci-dessous:</p>
        </div>
        <form class="sectionForm" action="" method="POST">
            <div class="form-group row">
                <label for="inputFirstname" class="col-sm-2 col-form-label">Prénom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputFirstname">
                    <small><span class="error"><?= "$firstnameErr";?></span></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputLastname" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputLastname">
                    <small><span class="error"><?= "$lastnameErr";?></span></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3">
                    <small><span class="error"><?= "$emailErr";?></span></small>
                    <small id="emailHelp" class="form-text text-muted">On ne partagera jamais votre email avec quelqu'un d'autre.</small>
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Genre</legend>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="F" checked>
                            <label class="form-check-label" for="gridRadios1">
                                F
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="M">
                            <label class="form-check-label" for="gridRadios2">
                                M
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="topic-select">Niveau</label>
                <select class="custom-select" id="topic-select" name="topic-select" required>
                    <?php foreach ($levels as $level): ?>
                        <option value="<?= $level; ?>">
                            <?= $level; ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group row">
                <div class="form_buttons">
                    <button type="reset" id="formButton" class="btn btn-light">Effacer</button>
                    <button type="submit" id="formButton2" class="btn btn-success">Envoyer !</button>
                </div>
        </form>
    </section>
</main>

<?php include '_footer.html'; ?>