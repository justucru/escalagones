<?php $nav_en_cours = 'contact'; ?>
<?php include '_header.php'; ?>

<main>
    <h2>Contactez-nous !</h2>

    <div class="texteForm">
        <h3 class="intro_para">Merci pour votre message</h3>
    </div>
    <div class="merci">
        <p>Nous faisons au plus vite pour répondre à votre demande:
            <ul>
                <li><?=$_GET['email']?></li>
                <li><?=$_GET['message']?></li>
            </ul>
        A bientôt !
        </p>
    </div>
    <div id="retour">
    <a href="contact.php">Retour au formulaire</a>
    </div>

</main>