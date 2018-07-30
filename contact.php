<?php include('Partials/header.php') ?>

<?php include('Partials/menu.php') ?>

<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col col-sm-12">

        <h2>Contact</h2>
        <small class="form-text text-muted">Nous ne partagerons jamais votre email avec quelqu'un d'autre.</small>

      <!-- FORM -->
      <form>
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
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>
      <!-- FORM -->

      </div>
    </div>
  </div>
<div>

<?php include('Partials/footer.php') ?>
