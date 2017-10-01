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
<form>
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
<select>
	<option value="OT">Otro</option>
	<option value="PA">Panamá
	<option value="ES">El Salvador
	<option value="GU">Guatemala
	<option value="CR">Costa Rica
	<option value="HO">Honduras
	<option value="NI">Nicaragua
	<option value="BE">Bélice
</select><br>

<label>RUT/RUC/NIC/NIT/RIF/RFC/CI:</label>
<input type="text" name="dntknow" size="35"><br>


<h5>Los campos marcados con (<span class="red">*</span>) son obligatorios.</h5>

<input class=" botón" type="submit" name="bottom" value="Enviar">
</div>
</form>
</div>
</body>
</html>