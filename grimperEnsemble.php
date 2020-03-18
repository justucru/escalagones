<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="CSS/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Escalagones - Grimper Ensemble</title>
</head>

<body>
    <?php include '_header.html'; ?>
    <!-- Code pour la page "Grimper Ensemble"-->


    <h2>Grimper Ensemble</h2>

    <!-- Section contenant les évènements deja saisis -->
    <div class="titresEnsemble">
        <h3>Les évènements à venir</h3>
    </div>
    <section class="sectionCards">
        <!-- Evènement 1-->
        <div class="card" style="width: 18rem;">
            <img src="images/gd_climber_force.jpg" class="card-img-top" alt="Une personne escalade un mur en intérieur">
            <div class="card-body">
                <h5 class="card-title">Challenge Grimpe</h5>

                <p>Rejoignez-nous ce samedi 14 mars pour notre nouveau challenge chronométré : un.e seul.e grimpeur.se
                    sera gagnant.e !</p>
                <p class="card-text creditPhoto">Image par <a href="https://visualhunt.com/re6/95a6fcb0">Visual hunt</a>
                </p>
                <a href="#" class="btn btn-success cardButton">Voir l'événement</a>
            </div>


        </div>
        <!-- Evènement 2-->
        <div class="card" style="width: 18rem;">
            <img src="images/gd_iceClimb.jpg" class="card-img-top" alt="Deux grimpeurs sur une cascade gelée">
            <div class="card-body">
                <h5 class="card-title">Ice Climbing !</h5>

                <p>Dimanche 22 mars, nous vous proposons de venir affronter les torrents glacés des Alpes.
                    Au programme, escalade d'une cascade gelée, qui promet pas mal de frissons !
                </p>
                <p class="card-text creditPhoto">Image par <a
                        href="https://pixabay.com/fr/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1247606">Pixabay</a>
                </p>
                <a href="#" class="btn btn-success cardButton">Voir l'événement</a>
            </div>
        </div>

        <!-- Evènement 3-->
        <div class="card" style="width: 18rem;">
            <img src="images/gd_enFamille.png" class="card-img-top" alt="Deux enfants font de l'escalade">
            <div class="card-body">
                <h5 class="card-title">Grimper avec vos Gones !</h5>

                <p>Le samedi 28 mars, à partir de 15h :
                    parents débutants ou expérimentés, faites découvrir votre passion à vos enfants !</p>
                <p>Ils auront accès à un mur dédié, accompagnés d'un.e animateur.trice, en toute sécurité.
                    Activités accessibles aux enfants à partir de 4 ans.</p>

                <p class="card-text creditPhoto">Image par <a
                        href="https://visualhunt.com/re6/e4cb601b">VisualHunt.com</a>
                </p>
                <a href="#" class="btn btn-success cardButton">Voir l'événement</a>
            </div>
        </div>



    </section>



    <!-- Section pour trouver Partenaires de grimpe -->

    <div class="titresEnsemble">
        <h3>Trouver un.e partenaire de grimpe !</h3>
    </div>
    <section class="sectionCards">

        <div class="card" style="width: 18rem;">
            <img src="images/gd_robert.jpg" class="card-img-top" alt="Photo de Robert">
            <div class="card-body">
                <h5 class="card-title">Robert</h5>
                <p class="card-text">Robert, grimpeur expert à Villeurbanne cherche un.e partenaire de grimpe,
                    contactez-le ici.</p>
                <p class="card-text creditPhoto">Image par <a href="https://visualhunt.com/re6/e4cb601b">VisualHunt</a>
                </p>
                <a href="#" class="btn btn-success cardButton">Le contacter</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="images/gd_claire.png" class="card-img-top" alt="Photo de Claire">
            <div class="card-body">
                <h5 class="card-title">Claire</h5>
                <p class="card-text">Claire, grimpeuse expérimentée, cherche un.e partenaire de grimpe,
                    contactez-la ici.</p>
                <p class="card-text creditPhoto">Image par <a href="https://visualhunt.com/re6/456c498b">Visualhunt</a>
                </p>

                <a href="#" class="btn btn-success cardButton">La contacter</a>
            </div>
        </div>
    </section>
    <!-- Formulaire de contact -->
    <div class="titresEnsemble"><a id="formulaire">
            <h3>Formulaire de contact</h3>
        </a></div>

    <form class="sectionForm">


        <!-- Menu déroulant avec les différents choix -->

        <div class="form-group">
            <select class="custom-select" required>
                <option value="">Je souhaite proposer un événement</option>
                <option value="">Je souhaite proposer un lieu</option>
                <option value="">Je souhaite vous contacter</option>
            </select>
        </div>

        <!-- Input de l'email et du message de l'utilisateur -->

        <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Saisissez votre email">
            <small id="emailHelp" class="form-text text-muted">On ne partagera jamais votre email avec quelqu'un
                d'autre.</small>
        </div>

        <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                placeholder="Saisissez votre message"></textarea>
        </div>
        <div class="form_buttons">
            <button type="reset" id="formButton" class="btn btn-light">Effacer</button>
            <button type="submit" id="formButton2" class="btn btn-success">Envoyer !</button>
        </div>

    </form>



    <?php include '_footer.html'; ?>

<!-- JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="JavaScript/app.js"></script>
</body>

</html>