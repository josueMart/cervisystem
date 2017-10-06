<?php include 'header.php';?>
<header class="container">
	<div class="row justify-content-md-center">
		<div class="col"><h3>CerviSystem</h3></div>
		<div class="col"><h1>Administración General</h1></div>

	</div>
	<div class="row">
		<div class="col">
			<div class="dropdown">
				  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Clientes
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    <a class="dropdown-item" href="nvoCliente.php">Nuevo Cliente</a>
				    <a class="dropdown-item" href="actCliente.php">Actualizar Cliente</a>
				    <a class="dropdown-item" href="#">Eliminar Cliente</a>
				    <a class="dropdown-item" href="#">Consultar</a>
				  </div>
			</div>
		</div>
		<div class="col"><a href="Usuarios.php">Usuarios</a></div>
		<div class="col"><a href="catalogo.php">Catálogo</a></div>
		<div class="col"><a href="proveedores.php">Proveedores</a></div>
		<div class="col"><a href="permisos.php">Permisos</a></div>
	</div>
</header>