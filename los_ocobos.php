<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" type="image/x-icon" href="img/favicon.png">
	<title>Compensar</title>
</head>
<body style='font-family: "Roboto Light",sans-serif;'>

<header>
	<div class="col-12 text-center" style="min-height: 80px;">
		<img src="img/logo1.png" class="img-fluid" style="margin-top:1rem;">
	</div>
</header>

<main class="container">
	<div class="row">
		<div class="col-12 text-center" style="font-weight: bold; font-size: 36px; color: black; margin-top: 1rem;">Apartamento los Ocobos</div>
	</div>
</main>

<section style="background-color: #0000000f; padding-bottom: 2rem;">
	<div class="container" style="margin-top:3rem;">
		<div class="row">
			<div class="col-4 text-center" style="font-weight: bold; font-size: 36px; color: black; margin-top: 1rem;">
				<img src="img/casa1_1.jpg" class="img-fluid" style="margin-top:1rem; width: 600px;">
			</div>
			<div class="col-4 text-center" style="font-weight: bold; font-size: 36px; color: black; margin-top: 1rem;">
				<img src="img/casa1_2.jpg" class="img-fluid" style="margin-top:1rem; width: 600px;">
			</div>
			<div class="col-4 text-center" style="font-weight: bold; font-size: 36px; color: black; margin-top: 1rem;">
				<img src="img/casa1_4.jpg" class="img-fluid" style="margin-top:1rem; width: 600px;">
			</div>
		</div>
		<div class="row mt-3 card">
			<div class="row" style="padding: 1rem;">
				<div class="col-4 text-center" style="margin-top: 1rem;">
					<p>Publicado: hace 8 meses</p>
				</div>
				<div class="col-4 text-center" style="margin-top: 1rem;">
					<p>Precio: $154.350.000</p>
				</div>
				<div class="col-4 text-center" style="margin-top: 1rem;">
					<p>Dirección: Cajicá - vía Zipaquirá</p>
				</div>
				<div class="col-4 text-center" style="margin-top: 1rem; padding-top: 1rem;">Tipo de Operación: Comprar</div>
				<div class="col-4 text-center" style="margin-top: 1rem; padding-top: 1rem;">Tipo de inmueble: Apartamento</div>
				<div class="col-4 text-center" style="margin-top: 1rem; padding-top: 1rem;">Estado de conservación: Obra por iniciar</div>
				<div class="col-4 text-center" style="margin-top: 1rem; padding-top: 1rem;">Fecha de inicio: 01/11/2022</div>
				<div class="col-4 text-center" style="margin-top: 1rem; padding-top: 1rem;">Entrega estimada: 01/06/2024</div>
				<div class="col-4 text-center" style="margin-top: 1rem; padding-top: 1rem;">Valor de Separación: $2.000.000</div>

				<div class="col-12 text-center" style="margin-top: 1rem; padding-top: 1rem; font-weight: bold;">Características</div>
				<div class="col-4 text-center" style="margin-top: 1rem; padding-top: 1rem;">Area total: 24m²</div>
				<div class="col-4 text-center" style="margin-top: 1rem; padding-top: 1rem;">Area techada: 21m²</div>
				<div class="col-4 text-center" style="margin-top: 1rem; padding-top: 1rem;">Habitaciones: 1</div>

				<div class="col-4 text-center" style="margin-top: 1rem; padding-top: 1rem;">Cerca a centros comerciales</div>
				<div class="col-4 text-center" style="margin-top: 1rem; padding-top: 1rem;">Cerca a colegios</div>
				<div class="col-4 text-center" style="margin-top: 1rem; padding-top: 1rem;">Cerca a parques</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container" style="margin-top:3rem;">
		<form id="formulario1" action="#" method="POST">
			<div class="row card">
				<div class="col-12 text-center" style="padding-top:1rem; padding-bottom:1rem; font-weight:bold; font-size: 20px;">
					¿Decide iniciar el crédito de vivienda?<br>Completa el formulario de contacto
				</div>
				<div class="col-12" style="padding-top:1rem; padding-bottom:1rem;">
					<label for="nombre" style="font-weight:bold;">Nombre Completo</label>
					<input type="text" name="nombre" id="nombre" class="form-control" pattern="[a-z]{1,25}" minlength="4" maxlength="25" autocomplete="off" required>
				</div>
				<div class="col-12" style="padding-top:1rem; padding-bottom:1rem;">
					<label for="tipo_documento" style="font-weight:bold;">Tipo de Documento</label>
					<select id="tipo_documento" name="tipo_documento" class="form-control" required>
						<option value="">Seleccione</option>
						<option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
						<option value="Cédula de Extranjería">Cédula de Extranjería</option>
					</select>
				</div>
				<div class="col-12" style="padding-top:1rem; padding-bottom:1rem;">
					<label for="documento_numero" style="font-weight:bold;">Número de Documento</label>
					<input type="text" name="documento_numero" id="documento_numero" class="form-control" pattern="[0-9]{1,15}" minlength="4" maxlength="25" autocomplete="off" required>
				</div>
				<div class="col-12" style="padding-top:1rem; padding-bottom:1rem;">
					<label for="telefono" style="font-weight:bold;">Teléfono Celular</label>
					<input type="text" name="telefono" id="telefono" class="form-control" pattern="[0-9]{1,15}" minlength="4" maxlength="15" autocomplete="off" required>
				</div>
				<div class="col-12" style="padding-top:1rem; padding-bottom:1rem;">
					<label for="direccion" style="font-weight:bold;">Dirección</label>
					<textarea name="direccion" id="direccion" class="form-control" minlength="4" maxlength="50" autocomplete="off" required></textarea>
				</div>
				<div class="col-12" style="padding-top:1rem; padding-bottom:1rem;">
					<label for="foto_usuario" style="font-weight:bold;">Fotografía del Usuario</label>
					<input type="file" name="foto_usuario" id="foto_usuario" class="form-control" autocomplete="off" required accept="image/png, image/pdf, image/jpeg">
				</div>
				<div class="col-12" style="padding-top:1rem; padding-bottom:1rem;">
					<label for="foto_documento_identidad" style="font-weight:bold;">Fotografía del documento de identidad</label>
					<input type="file" name="foto_documento_identidad" id="foto_documento_identidad" class="form-control" autocomplete="off" required accept="image/png, image/pdf, image/jpeg">
				</div>
				<div class="col-12" style="padding-top:1rem; padding-bottom:1rem;">
					<label for="foto_documentos_digitales" style="font-weight:bold;">Documentos Digitales</label>
					<input type="file" name="foto_documentos_digitales" id="foto_documentos_digitales" class="form-control" autocomplete="off" required accept="image/png, image/pdf, image/jpeg">
				</div>
				<div class="col-12" style="padding-top:1rem; padding-bottom:1rem;">
					<label for="viviendo_aplicada" style="font-weight:bold;">Información de la vivienda aplicada</label>
					<input type="text" name="viviendo_aplicada" id="viviendo_aplicada" class="form-control" value="Apartamento Los Ocobos" readonly>
				</div>
				<div class="col-12 text-center mt-3 mb-3">
					<button type="submit" class="btn btn-success" style="font-weight: bold; font-size: 20px;">Enviar Información</button>
				</div>
			</div>
		</form>
	</div>
</section>

<?php include("footer.php"); ?>

<script src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script type="text/javascript">
	$("#formulario1").on("submit", function(e){
		e.preventDefault();
		var nombre = $('#nombre').val();
		var telefono = $('#telefono').val();
		var direccion = $('#direccion').val();
		Swal.fire({
			title: 'Se ha enviado exitosamente',
			text: 'Muchas gracias '+nombre+' Por enviar tu información',
			icon: 'success',
			position: 'center',
			showConfirmButton: true,
		});
	});
</script> 