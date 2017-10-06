<?php 
include 'header.php';
 ?>


<div class="container">
	<div class="row justify-content-md-center">
	<h1>CerviSystem</h1>
	
	</div>
	<div class="row justify-content-md-center">
		<form action="modules.php">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nombre de Usuario</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		    <small id="emailHelp" class="form-text text-muted">No compartas tus datos de usuario con nadie.</small>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <div class="form-check">
		    <label class="form-check-label">
		      <input type="checkbox" class="form-check-input">
		      Check me out
		    </label>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>

	</div>
</div>
<?php 
include 'footer.php'
 ?>