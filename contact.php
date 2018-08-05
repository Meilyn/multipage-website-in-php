<?php include('Partials/header.php') ?>
<?php include('Partials/menu.php') ?>

<!-- Jumbotron -->
	<div class="jumbotron jumbotron-fluid" class="info" style="background-image: url(Assets/images/repos.jpg);background-size: cover;" >
	  <div class="container" align="center"><br>
	    <h1 class="display-4">Contactez-Nous</h1>
	    <p class="lead">Besoin d'aide?</p>
	  </div>
	</div>

<div class="container">
		<form>
		  <div class="form-row">
		  	 <div class="form-group col-md-6">
		      <label for="inputname">Nom</label>
		      <input type="text" class="form-control" id="inputname" placeholder="Votre Nom">
		    </div>
		     <div class="form-group col-md-6">
		      <label for="inputprenom">Prènom</label>
		      <input type="text" class="form-control" id="inputprenom" placeholder="Votre Prènom">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Email</label>
		      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Mot de Passe</label>
		      <input type="password" class="form-control" id="inputPassword4" placeholder="Mot de passe">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputAddress">Address</label>
		    <input type="text" class="form-control" id="inputAddress" placeholder="Votre Rue">
		  </div>
		  <div class="form-group">
		    <label for="inputAddress2">Address 2</label>
		    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputCity">Ville</label>
		      <input type="text" class="form-control" id="inputCity" placeholder="Ville">
		    </div>
		    <div class="form-group col-md-2">
		      <label for="inputZip">Code Postal</label>
		      <input type="text" class="form-control" id="inputZip" placeholder="Code Postal">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="form-check">
		      <input class="form-check-input" type="checkbox" id="gridCheck">
		      <label class="form-check-label" for="gridCheck">
		        Check me out
		      </label>
		    </div>
		  </div><br>
		  <button type="submit" class="btn btn-primary">Sign in</button>
		</form><br>
</div>
<?php include('Partials/footer.php') ?>
