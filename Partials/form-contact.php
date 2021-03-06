<?php include('Partials/header.php') ?>
<?php include('Partials/menu.php') ?>

<!-- Jumbotron -->
	<div class="jumbotron jumbotron-fluid" class="infoContact" style="background-image: url(assets/img/maison-repos.jpg);background-size: cover;color: white;" >
	  <div class="container" align="center"><br>
	    <h1 class="display-4">Contactez-Nous</h1>
	    <p class="lead">Besoin d'aide?</p>
	  </div>
	</div>
	<!-- Logo -->
    <div class="container" align="left">
    	<h3 class="py-2 d-none d-md-inline-block mx-auto">SEN<span class="oah">OAH</span></h3>
    </div>
     	<small class="form-text text-muted">Nous ne partagerons jamais votre email avec quelqu'un d'autre.</small><hr>
<div class="container">
		<form method="POST" enctype="multipart/form-data" action="mail.php">
		  <div class="form-row">
		  	 <div class="form-group col-md-6">
		      <label for="inputname">Nom</label>
		      <input type="text" class="form-control" id="inputname" placeholder="Votre Nom" name="name">
		    </div>
		     <div class="form-group col-md-6">
		      <label for="inputprenom">Prènom</label>
		      <input type="text" class="form-control" id="inputprenom" placeholder="Votre Prènom" name="name">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Email</label>
		      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" required>
		      <div class="invalid-feedback">
        		Please provide a valid email.
      		  </div>
		    </div>
		    <div class="form-group col-md-6">
		      <label for="Téléphone">Téléphone</label>
		      <input type="tel" class="form-control" id="phone" minlength="9" maxlength="12" name="phone" placeholder="0499/99 66 66" required>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="my-1 mr-2" for="SelectObjet">Objet</label>
  			<select class="custom-select my-1 mr-sm-2" id="SelectObjet" name="SelectObjet">
			    <option selected>Choisir...</option>
			    <option value="1">Vous êtes à la recherche d’un lieu de vie ?</option>
			    <option value="2">Vous avez une question ou une suggestion à nous faire ?</option>
			  </select>

		  </div>
		  <div class="form-group">
		    <label for="inputMessage">Message</label>
		    <textarea type="textarea" class="form-control" id="inputMessage" rows="10" cols="50" name="message" placeholder="Votre message ici">
		    </textarea>
		 </div>     
		  <div class="form-group">
		    <div class="form-check">
		      <label for="formDocument">Documents</label>
    		  <input type="file" class="form-control-file" id="formDocument">
		    </div>
		  </div><br>
		  <button type="submit" class="btn btn-danger">Contactez-nous</button>
		</form><br>
</div>
<?php include('Partials/footer.php') ?>
