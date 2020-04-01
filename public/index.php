<?php $nav_en_cours = 'index'; ?>
<?php include '_header.php'; ?>


<main>
    <div id="banniere">
        <h2>Escalagones</h2>
        <p> Le site incourtounable des grimpeurs.ses en région Lyonnaise !</p>
    </div>

    <div class="texteAccueil">
        <h3>Bienvenue sur le site de référence de l'escalade lyonnaise !</h3>
            <p>Grimpeur.se novice ou as de la grimpe, seul.e ou accompagné.e, Escalagones est un véritable roadbook pour satisfaire toutes vos envies !</p>
            <p>Vous trouverez ici tout ce que la région lyonnaise peut vous offrir, que ce soit en intérieur (blocs ou voies) ou en extérieur. Vous pouvez également rechercher un.e partenaire de grimpe et vous tenir à jour des prochains événements. Escalagones vous offre des conseils avisés quant au choix de votre matériel. </p>
            <p>N'hésitez pas à nous contacter pour toute question, ou si vous souhaitez organiser une sortie !</p>
    </div>

    <section class=cardHomePage>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Grimper en intérieur</h5>
                    <p class="card-text">Il existe différentes salles pour grimper sur Lyon, que vous soyez adeptes du bloc
                    ou de la voie. Découvrez ici les différents pratiques, les salles et leurs offres !</p>
                    <a href="interieur.php" class="btn btn-success cardButton">Voir plus</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Grimper en extérieur</h5>
                    <p class="card-text">Grimper en extérieur est accessible à tous, à conditions de connaître les bons
                    spots !
                    Découvrez ici les meilleurs endroits pour grimper en extérieur, dans Lyon et ses environs.</p>
                    <a href="exterieur.php" class="btn btn-success cardButton">Voir plus</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Grimper ensemble</h5>
                    <p class="card-text">Si le bloc peut se pratiquer seul.e, les voies nécessitent un.e partenaire de grimpe.
                    Ici nous regroupons des annonces pour vous retrouver, et passer un bon moments à la salle en étant sûr
                    d'avoir un.e partenaire. Vous pouvez-aussi retrouver des événements pour grimper en extérieur ou proposer vos
                    propres événements ! </p>
                    <a href="grimperEnsemble.php" class="btn btn-success cardButton">Voir plus</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Matériel</h5>
                    <p class="card-text">Débutant.e.s ou initié.e.s, si vous cherchez des conseils sur le matériel à avoir, vous
                    êtes au bon endroit. Retrouvez le matériel de base pour du bloc, de la voie, ou l'aventure à l'extérieur.</p>
                    <a href="materiel.php" class="btn btn-success cardButton">Voir plus</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Contactez-nous</h5>
                    <p class="card-text">Une question ? Une envie de proposer un événement ? Pour toute demande, n'hésitez
                    pas à nous contacter via notre formulaire. Toute la team Escalagones se fera un plaisir de vous répondre.</p>
                    <a href="grimperEnsemble.php#formulaire" class="btn btn-success cardButton">Contactez-nous !</a>
            </div>
        </div>
    </section>
</main>

<?php include '_footer.html'; ?>