<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Formulario de votos</title>
</head>
<body>
	<div class="container">
		<form action="#" method="POST">
		<div class="title">
			Formulario de votos
		</div>

			<div class="form">
				<div class="input_field">
					<label>Nombre y Apellido</label>
					<input type="text" class="input" name="nomapellido">
				</div>

				<div class="input_field">
					<label>Alias</label>
					<input type="text" class="input" name="alias">
				</div>

				<div class="input_field">
					<label>RUT</label>
					<input type="text" class="input" name="rut">
				</div>

				<div class="input_field">
					<label>Email</label>
					<input type="text" class="input" name="email">
				</div>

				<div class="input_field">
					<label>Region</label>
					<div class="custom_select">
						<select name="region">
							<option value="">Seleccione una region</option>
							<option value="arica">Región de Arica y Parinacota</option>
							<option value="tarapaca">Región de Tarapacá</option>
					    </select>
					</div>
				</div>

				<div class="input_field">
					<label>Comuna</label>
					<div class="custom_select">
						<select name="comuna">
							<option value="">Seleccione una comuna</option>
							<option value="cerrillos">Cerrillos</option>
							<option value="puentealto">Puente Alto</option>
						</select>
					</div>	
				</div>

				<div class="input_field">
					<label>Candidato</label>
					<div class="custom_select">
						<select name="candidato">
							<option value="">Seleccione una candidato</option>
							<option value="ibai">Ibai</option>
							<option value="illoJuan">IlloJuan</option>			
						</select>	
					</div>		
				</div>

				<div class="input_field">
					<label style="margin-right: 100px;">Como se enteró de Nosotros</label>
					<input type="radio" name="r1" value="Web" required><label style="margin-left: 5px;">Web</label>
					<input type="radio" name="r1" value="TV" required><label style="margin-left: 5px;">TV</label>
					<input type="radio" name="r1" value="Redes Sociales" required><label style="margin-left: 5px;">Redes Sociales</label>
					<input type="radio" name="r1" value="Amigo" required><label style="margin-left: 5px;">Amigo</label>
				</div>

				
				<div class="input_field">
					<input type="submit" value="Votar" class="btn" name="votar">
				</div>				
			</div>
		</form>
	</div>
</body>

</html>

<?php 
	if($_POST['votar']) 
	{
		$nomapellido = $_POST['nomapellido'];
		$alias		 = $_POST['alias'];
		$rut 		 = $_POST['rut'];
		$email 		 = $_POST['email'];
		$region	     = $_POST['region'];
		$comuna 	 = $_POST['comuna'];
		$candidato 	 = $_POST['candidato'];
		$nosotros    = $_POST['r1'];

		$query = "INSERT INTO FORM (nomapellido,alias,rut,email,region,comuna,candidato,nosotros) VALUES('$nomapellido','$alias','$rut','$email','$region','$comuna','$candidato','$nosotros')";
		$data = mysqli_query($conn,$query);

		if($data)
		{
			echo "Data Inserted into Database";
		}
		else  
		{
			echo "Failed";
		}
	}
?>