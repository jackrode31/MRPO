<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>

	
<div class="container">
	<h2>Activar Software</h2>
	<hr>



<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
	<h3>Complete con sus datos para obtener su licencia</h3>
	<h4>Si Ud. posee un código de activación y/o número de serie, puede registrarlo a través del siguiente formulario</h4>
<div>
<label>Número de Serie <span class="red">*</span>:</label>
<input type="text" name="nserie"
required maxlength="25" size="35" placeholder="XXXXX-XXXXX-XXXXX-XXXXX"><br>
<label>Nombre <span class="red">*</span>:</label>
<input type="text" name="fname" required placeholder="Rode" size="35"><br>
<label>Apellido <span class="red">*</span>:</label>
<input type="text" name="lname" required placeholder="Acevedo" size="35"><br>
<label>Email <span class="red">*</span>:</label>
<input type="text" name="email" required placeholder="email@utp.ac.pa" size="35"><br>
<label>Teléfono <span class="red">*</span>:</label>
<input type="text" name="phone" required placeholder="911" size="35"><br>
<label>Dirección:</label> 
<input type="text" name="address" placeholder="Costa del Este" size="35"><br>
<label>Ciudad <span class="red">*</span>:</label>
<input type="text" name="country" placeholder="Panamá" size="35"><br>
<label>Provincia/Estado:</label>
<input type="text" name="state" placeholder="Los Santos" size="35"><br>
<label>País <span class="red">*</span>:</label>
<select name="valor">
	<option value="Otro">Otro</option>
	<option value="Panamá">Panamá</option>
	<option value="El Salvador">El Salvador</option>
	<option value="Guatemala">Guatemala</option>
	<option value="Costa Rica">Costa Rica</option>
	<option value="Honduras">Honduras</option>
	<option value="Nicaragua">Nicaragua</option>
	<option value="Bélice">Bélice</option>
</select><br>
<label>RUT/RUC/NIC/NIT/RIF/RFC/CI:</label>
<input type="text" name="dntknow" size="35"><br>
<h5>Los campos marcados con (<span class="red">*</span>) son obligatorios.</h5>
<input class=" botón" type="submit" name="submit" value="Enviar">
</div>
</form>


<?php 
if(isset($_POST['submit']))
 
{
 
$name = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$country  = $_POST['country'];
$address = $_POST['address'];
$state = $_POST['state'];
$dntknow = $_POST['dntknow'];
$pais= $_POST['valor'];
$codex = $_POST['nserie'];

echo "<h2>Software Activado</h2>";

echo "<hr>";
 
echo "<h3 style ='color:green; '>Datos personales</h3><br>";

echo "<p style='margin:4px; padding:5px;'>Su nombre completo:<b> $name </b> <b>$lname</b><br></p>";

echo "<p style='margin:4px; padding:5px;'>Email: <b>$email</b><br></p>";

echo "<p style='margin:4px; padding:5px;'>Dirección: <b>$country, $address, $state</b><br></p>";

echo "<p style='margin:4px; padding:5px;'>Teléfono: <b>$phone</b><br></p>";

echo "<p style='margin:4px; padding:5px;'>RUT: <b>$dntknow</b><br></p>";

echo "<p style='margin:4px; padding:5px;'>País: <b>$pais</b><br></p>";

echo "<p style='margin:4px; padding:5px;'>Su código de activación: <b>$codex</b><br></p>";

echo "<h6 style='color:green; font-style:italic;'>Gracias por activar su producto.</h6><br>";
}

 ?>


</div>
</body>
</html>