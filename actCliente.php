<?php 
include 'header-modules.php';
 ?>
 <div class="container">
 	<div class="row module-title"  >
 		<p>Actualizar Cliente</p>
 	</div>
  </div>
  <div class="container">
 		<form class="formulario">
 			<div class="form-group row">
 				<label for="inputClave" class="col-sm-2 col-form-label">Clave:</label>
 				<div class="col-sm-2">
 					<input type="text" class="form-control" name="Empresa" id="inputClave" placeholder="Clave del Cliente">
 				</div>
 				<a href=""><span>Buscar</span></a>
 			</div>
 			<div class="form-group row">
 				<label for="inputEmpresa" class="col-sm-2 col-form-label">Empresa:</label>
 				<div class="col-sm-7">
 					<input type="text" class="form-control" name="Empresa" id="inputEmpresa" placeholder="Nombre de la empresa">
 				</div>
 			</div>
 			<div class="form-group row">
 				<label for="inputDireccion" class="col-sm-2 col-form-label">Direccion:</label>
 				<div class="col-sm-7">
 					<input type="text" class="form-control" name="Direccion" id="inputDireccion" placeholder="Direccion fiscal de la empresa">
 				</div>
 			</div>
 			<div class="form-group row">
 				<label for="inputEstado" class="col-sm-2 col-form-label">Estado:</label>
 				<div class="col-sm-7">
 					<input type="text" class="form-control" name="Estado" id="inputEstado" placeholder="Estado">
 				</div>
 			</div>
 			<div class="form-group row">
 				<label for="inputMunicipio" class="col-sm-2 col-form-label">Municipio/Delegación: </label>
 				<div class="col-sm-7">
 					<input type="text" class="form-control" name="Municipio" id="inputMunicipio" placeholder="Municipio o Delegación">
 				</div>
 			</div>
 			<div class="form-group row">
 				<label for="inputCP" class="col-sm-2 col-form-label">Código postal: </label>
 				<div class="col-sm-7">
 					<input type="text" class="form-control" name="CP" id="inputCP" placeholder="Código postal">
 				</div>
 			</div>
 			<div class="form-group row">
 				<label for="inputRFC" class="col-sm-2 col-form-label">RFC:</label>
 				<div class="col-sm-7">
 					<input type="text" class="form-control" name="RFC" id="inputRFC" placeholder="RFC">
 				</div>
 			</div>
 			<div class="form-group row">
 				<label for="inputEntrega" class="col-sm-2 col-form-label">Entrega: </label>
 				<div class="col-sm-7">
 					<input type="text" class="form-control" name="Entrega" id="inputEntrega" placeholder="Direccion de Entrega">
 				</div>
 			</div>
 			<div class="form-group row">
 				<label for="inputContacto1" class="col-sm-2 col-form-label">Contacto 1: </label>
 				<div class="col-sm-7">
 					<input type="text" class="form-control" name="Contacto" id="inputContacto1" placeholder="Contacto 1">
 				</div>
 			</div>
 			<div class="form-group row">
 				<label for="inputContacto2" class="col-sm-2 col-form-label">Contacto2: </label>
 				<div class="col-sm-7">
 					<input type="text" class="form-control" name="Contacto2" id="inputContacto2" placeholder="Contacto 2">
 				</div>
 			</div>	
 			<div class="form-group row">
 				<label for="inputTel1" class="col-sm-2 col-form-label">Teléfono 1:</label>
 				<div class="col-sm-7">
 					<input type="tel" class="form-control" name="Tel1" id="inputTel1" placeholder="Telefono 1">
 				</div>
 			</div>
 			<div class="form-group row">
 				<label for="inputTel2" class="col-sm-2 col-form-label">Teléfono 2:</label>
 				<div class="col-sm-7">
 					<input type="tel" class="form-control" name="Tel2" id="inputTel2" placeholder="Telefono 2">
 				</div>
 			</div>
 			<div class="form-group row">
 				<label for="inputEmail1" class="col-sm-2 col-form-label">Email 1: </label>
 				<div class="col-sm-7">
 					<input type="email" class="form-control" name="Email1" id="inputEmail1" placeholder="Correo electrónico 1">
 				</div>
 			</div>
 			<div class="form-group row">
 				<label for="inputEmail2" class="col-sm-2 col-form-label">Email 2: </label>
 				<div class="col-sm-7">
 					<input type="email" class="form-control" name="Email2" id="inputEmail2" placeholder="Correo electrónico 2">
 				</div>
 			</div>
 			<div class="form-group row">
			    <label for="inputTextarea1" class="col-sm-2 col-form-label">Observaciones: </label>
			    <div class="col-sm-7">
			    	
			    	<textarea class="form-control" id="inputTextarea1" rows="5"></textarea>

			    </div>
			 </div>
			 <div class="row">
			 	<div class="col-sm-2"></div>
			 	<div class="col-sm-7">
			 	<button type="submit" class="btn btn-primary" >Actualizar Cliente</button>
			 	</div>

			 </div>
 				  
		</form>
 </div>
 <?php include 'footer.php'; ?>


 