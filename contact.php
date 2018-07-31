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
          <br>
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
          <br id='errorTitle'>

          <div class="form-group">
            <label for="inputFirstName">Prénom</label>
            <input type="text" class="form-control" id="inputFirstName" placeholder="Votre prénom">
          </div>
          <br id="errorFirstName">

          <div class="form-group">
            <label for="inputLastName">Nom</label>
            <input type="text" class="form-control" id="inputLastName" placeholder="Votre Nom">
          </div>
          <br id="errorName">

          <div class="form-group">
            <label for="inputEmail">Mail</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Votre mail">
          </div>
          <br id="errorEmail">

          <div class="form-group">
           <label for="selectObjet">Objet</label>
           <select class="form-control" id="selectObjet">
             <option>Question 1</option>
             <option>Question 2</option>
             <option>Question 3</option>
             <option>Question 4</option>
             <option>Question 5</option>
           </select>
         </div>
         <br id="errorSubject">

         <div class="form-group">
           <label for="textareaMessage">Message</label>
           <textarea class="form-control" id="textareaMessage" placeholder="Votre message"></textarea>
         </div>
         <br id="errorMessage">

          <button type="submit" class="btn btn-default">Contactez-nous</button>

        </form>

      </div>
    </div>
  </div>
<div>


<?php include('Partials/footer.php') ?>
