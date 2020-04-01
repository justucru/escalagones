<?php $nav_en_cours = 'contact'; ?>
<?php include '_header.php'; ?>

<?php

$topics = [
    'Je souhaite proposer un événement',
    'Je souhaite proposer un lieu',
    'Je cherche un partenaire de grimpe',
    'Autre demande'
    ];

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$email = $message = "";
$emailErr = $messageErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $emailErr = "*Votre adresse mail est requise.";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "*Format invalide.";
        }
    }
    if (empty($_POST["message"])) {
        $messageErr = "*Une description de votre demande est requise.";
    } else {
        $message = test_input($_POST["message"]);
    }
    if($emailErr == "" && $messageErr == "") {
        header("location: thanks.php?email=" . $email . "&message=" . $message);
    }
}

?>

<main>
    <h2>Contactez-nous !</h2>

    <div class="texteForm">
        <h3 class="intro_para">N'hésitez pas à nous joindre !</h3>
        <p class="intro_para">Que ce soit pour une suggestion, une question ou toute autre demande, nous sommes à votre écoute !</p>
    </div>

    <form class="sectionForm" action="" method="POST">
        <!-- Menu déroulant avec les différents choix -->
        <div class="form-group">
            <label for="topic-select">Votre demande</label>
            <select class="custom-select" id="topic-select" name="'topic-select" required>
                <?php foreach ($topics as $topic): ?>
                    <option value="<?= $topic; ?>">
                        <?= $topic; ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <!-- Input de l'email et du message de l'utilisateur -->
        <div class="form-group">
            <label for="exampleInputEmail1">Votre adresse mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="p.edlinger@gmail.com" name="email">
            <small id="emailHelp" class="form-text text-muted">On ne partagera jamais votre email avec quelqu'un d'autre.</small>
            <small><span class="error"><?= $emailErr;?></span></small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Votre message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Racontez-nous tout !" name="message"></textarea>
            <small><span class="error"><?= $messageErr;?></span></small>
        </div>
        <div class="form_buttons">
            <button type="reset" id="formButton" class="btn btn-light">Effacer</button>
            <button type="submit" id="formButton2" class="btn btn-success">Envoyer !</button>
        </div>
    </form>
</main>

<?php include '_footer.html';?>