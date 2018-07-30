<?php

  // Variables //

  $child = filter_var($_POST['nameChild'], FILTER_SANITIZE_STRING);
  $prof = filter_var($_POST['nameProf'], FILTER_SANITIZE_STRING);

  $malade = isset($_POST['malade']) ? $_POST['malade'] : NULL;
  $rip = isset($_POST['rip']) ? $_POST['rip'] : NULL;
  $extrascolaire = isset($_POST['extra-scolaire']) ? $_POST['extra-scolaire'] : NULL;
  $autre = isset($_POST['autre']) ? $_POST['autre'] : NULL;

  $date = date('l d M Y');

  $textBase = 'Bonjour, ' . $prof . '. Mon enfant ' . $child . ' est absent ce ' . $date . ' car il ';

  // Variables //

  // Mes Tableaux des excuses //

  $maladeArray = array ("est malade, il a 40 de fièvre et est en plein délire.",
                        "est malade, on vient de l'interné",
                        "est malade, il a mangé un truc pas frais.");

  $ripArray = array ("est a l'enterrement de son petit colibri, Joseph!",
                     "est a l'enterrement pour jouer avec ces amis!",
                     "est a son propre enterrement, il m'a mal parlé.");

  $extrascolaireArray = array ("est malade, il a 40 de fièvre et est en plein délire.",
                               "est malade, on vient de l'interné",
                               "est malade, il a mangé un truc pas frais.");

  $autreArray = array ("est malade, il a 40 de fièvre et est en plein délire.",
                       "est malade, on vient de l'interné",
                       "est malade, il a mangé un truc pas frais.");

  $randMalade = $maladeArray[array_rand($maladeArray)];
  $randRip = $ripArray[array_rand($ripArray)];
  $randExtrascolaire = $extrascolaireArray[array_rand($extrascolaireArray)];
  $randMAutre = $autreArray[array_rand($autreArray)];

  // Mes Tableaux des excuses //

  // Mes Conditions //

  if ($malade == on) {
    $excuse = $textBase . $randMalade;
  } elseif ($rip == on) {
    $excuse = $textBase . $randRip;
  } elseif ($extrascolaire == on) {
    $excuse = $textBase . $randExtrascolaire;
  } elseif ($autre == on) {
    $excuse = $textBase . $randMAutre;
  }

  // if (strlen($child) == 0 && isset($child)) {
  //   echo "Vous avez oublié d'indiquer le nom de votre enfant.";
  // } elseif (strlen($prof) == 0 && isset($prof)) {
  //   echo "Vous avez oublié d'indiquer le nom de votre institutrice.";
  // }

  // Ma Condition //

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <title>Génération de mot d'excuse</title>
  </head>
  <body>

    <div class="container">

      <div class="row">

        <div class="col col-sm-12 bg-primary text-white">

          <br>

          <h1 class="bg-info text-white">Génération de mot d'excuse</h1>
          <small class="form-text text-muted bg-warning">* Mauvais goût</small>

          <br>

          <form action="excuse.php" method="post">

            <div class="form-group">

              <div>
                <label>Nom de l'enfant</label>
                <input class="form-control" type="text" name="nameChild"> <br>
              </div>

              <div>
                <label class="bg-primary text-white">Nom de l'institutrice</label>
                <input class="form-control" type="text" name="nameProf"> <br>
              </div>

              <div class="bg-info text-white">
                <div class="form-check">
                  <label>Raison de l'absence :</label> <br>
                  <input class="form-check-input" type="checkbox" name="malade" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">
                    Maladie
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="rip" id="defaultCheck2">
                  <label class="form-check-label" for="defaultCheck2">
                    Décès de l'animal de compagnie (ou d'un membre de la famille)
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="extra-scolaire" id="defaultCheck3">
                  <label class="form-check-label" for="defaultCheck3">
                    Activité extra-scolaire importante
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="autre" id="defaultCheck4">
                  <label class="form-check-label" for="defaultCheck4">
                    Autre
                  </label>
                </div>
              </div>

              <br>

              <button type="submit" class="btn btn-info">Génère</button>

              <?php echo "<div class='bg-warning text-dark'>" . $excuse . "</div>"; ?>

            </div>
          </form>

        </div>

      </div>

    </div>

  </body>
</html>
