<?php include('Partials/header.php') ?>

<?php include('Partials/menu.php') ?>

<?php include './Function/mail.php';
 ?>

<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col col-sm-12">

        <h2>Contact</h2>
        <small class="form-text text-muted">Nous ne partagerons jamais votre email avec quelqu'un d'autre.</small>

        <form enctype="multipart/form-data" action="contact.php" method="post" id="form">


          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="title" id="inlineRadioMme" value="Mme">
            <label class="form-check-label" for="inlineRadioMme">Mme</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="title" id="inlineRadioMlle" value="Mlle">
            <label class="form-check-label" for="inlineRadioMlle">Mlle</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="title" id="inlineRadioMr" value="Mr">
            <label class="form-check-label" for="inlineRadioMr">Mr</label>
          </div>
          <div class="form-group">
            <label for="inputFirstName">Prénom</label>
            <input type="text" class="form-control" id="inputFirstName" placeholder="Votre prénom">
          </div>
          <div class="form-group">
            <label for="inputLastName">Nom</label>
            <input type="text" class="form-control" id="inputLastName" placeholder="Votre Nom">
          </div>
          <div class="form-group">
            <label for="inputEmail">Mail</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Votre mail">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-default">Contactez-nous</button>
        </form>

      </div>
    </div>
  </div>
<div>


<?php include('Partials/footer.php') ?>
