<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <title>ESCALAGONES</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

</head>

<body>
  <?php include '_header.html'; ?>

  <section id="titrepage">
    <div>
      <img src="images/pxfuel.com(1).jpg" alt="Image de mousquetons d'escalade">
      <div class="Mattitre">
        <h2>LE MATERIEL</h2>
      </div>
    </div>

  </section>

  <main>

    <div class="sstitre">
      <h3>Le matériel essentiel</h3>
    </div>

    <div class="indooras">
      <div class="cardprdt0">
        <div class="g-card">
          <img src="images/cindy-chen-shoes.png" alt="Image de chaussons d'escalade">
          <div class="seprate-line"></div>
          <h4 class="title">LES CHAUSSONS</h4>
          <p>Accessoires indispensables, ils permettent de protéger vos pieds, tout en gardant la souplesse
            nécessaire pour affronter la paroi !</p>
        </div>
      </div>

      <div class="cardprdt1">
        <div class="g-card">
          <img src="images/harness.png" alt="Image d'un harnais">
          <div class="seprate-line"></div>
          <h4 class="title">LE HARNAIS</h4>
          <p>La sécurité avant tout ! Le harnais vous permet de grimper en toute sécurité et de redescendre avec
            confort.</p>
        </div>
      </div>

      <div class="cardprdt2">
        <div class="g-card">
          <img src="images/carbine-5871_1920-removebg-preview.png" alt="Image d'un assureur">
          <div class="seprate-line"></div>
          <h4 class="title">LES ASSUREURS</h4>
          <p>Comme le harnais, votre assureur est votre allié contre les chutes. A vérifier avant chaque ascension !</p>
        </div>
      </div>
        <div class="cardprdt3">
          <div class="g-card">
            <img src="images/magnesie.png" alt="Image de Magnésie">
            <div class="seprate-line"></div>
            <h4 class="title">LA MAGNESIE</h4>
            <p>Protégez vos mains avec ce partenaire magique ! Améliorez votre grip, oubliez la transpiration, et
              concentrez vous sur la grimpe !</p>
          </div>
        </div>

        <div class="cardprdt4">
          <div class="g-card">
            <img src="images/rope.png" alt="Image d'une corde">
            <div class="seprate-line"></div>
            <h4 class="title">LA CORDE</h4>
            <p>Votre corde est indispensable à la pratique, à la montée, comme à la descente, à ne pas négliger !</p>
          </div>
        </div>

        <div class="cardprdt5">
          <div class="g-card">
            <img src="images/helmet.png" alt="Image d'un casque">
            <div class="seprate-line"></div>
            <h4 class="title">LE CASQUE</h4>
            <p>Accessoire à ne surtout négligez, le bon casque pourra vous éviter bien des problèmes !</p>
          </div>
        </div>
  
        <div class="cardprdt6">
          <div class="g-card">
            <img src="images/backpack.png" alt="Image d'un sac-à-dos">
            <div class="seprate-line"></div>
            <h4 class="title">LE SAC A DOS
            </h4>
            <p>Accessoire surtout utile en extérieur : bien pratique !</p>
          </div>
        </div>

    </div>

    <!-- ajout d'un tableau par Amélie, si on le garde on enlève les titres avant pour ne pas déjà ranger le matos par catégorie, dans l'idée on présente tout le matos avec les card et on récapitule les besoin dans le tableau fait ici -->

    <h3 class="choixMateriel sstitre">De quel matériel avez-vous besoin ?</h3>
    <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Matériel</th>
          <th scope="col">Chaussons</th>
          <th scope="col">Harnais</th>
          <th scope="col">Assureur</th>
          <th scope="col">Magnésie</th>
          <th scope="col">Corde</th>
          <th scope="col">Casque</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Bloc en intérieur</th>
          <td>Indispensable</td>
          <td>Non</td>
          <td>Non</td>
          <td>Si nécessaire</td>
          <td>Non</td>
          <td>Non</td>
        </tr>
        <tr>
          <th scope="row">Voie en intérieur</th>
          <td>Indispensable</td>
          <td>Indispensable</td>
          <td>Indispensable</td>
          <td>Si nécessaire</td>
          <td>Si non prêté</td>
          <td>Non</td>
        </tr>
        <tr>
          <th scope="row">Bloc en extérieur</th>
          <td>Indispensable</td>
          <td>Non</td>
          <td>Non</td>
          <td>Si nécessaire</td>
          <td>Non</td>
          <td>Recommandé</td>
        </tr>
        <tr>
          <th scope="row">Voie en extérieur</th>
          <td>Indispensable</td>
          <td>Indispensable</td>
          <td>Indispensable</td>
          <td>Si nécessaire</td>
          <td>Indispensable</td>
          <td>Recommandé</td>
        </tr>
      </tbody>
    </table>


    </div>

    <!--fin du tableau-->

  </main>

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