<?php include('Partials/header.php'); ?>

<?php include('Partials/menu.php'); ?>

<?php include('./Function/mail.php'); ?>

<!-- COVER -->
<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark" id="jumbo-contact"></div>
<!-- COVER -->

<div class="container">
  <div class="row">

    <div class="col col-sm-12">

      <?php print $file->saveHTML(); ?>

    </div>

  </div>

</div>

<?php include('Partials/footer.php'); ?>
