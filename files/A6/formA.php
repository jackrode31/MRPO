<?php include ("lang.php");

if (isset($_GET['lang']) && ($_GET['lang'])=='en'){
    $contenido = $english; 
    $var="en";
	
	}
  else 
  {
  	if (isset($_GET['lang']) && ($_GET['lang']=='it')) 
  	{
  		$contenido = $italian;
  		$var="it";
  		
  		
  	}
  	else 
  		{
			$contenido = $español;
			$var="es";
  		}
  }

  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>

<a href="formA.php?lang=es">Espa&ntilde;ol</a> / <a href="formA.php?lang=en">Ingl&eacute;s</a> / <a href="formA.php?lang=it">Italian</a>

<div class="container">

	<h2><?php echo $contenido[0];?></h2>



<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">

	<h3><?php echo $contenido[1];?></h3>

	<h4><?php echo $contenido[2]; ?></h4>

<div>
<label><?php echo $contenido[3]; ?><span class="red">*</span>:</label>
<input type="text" name="nserie" required maxlength="25" size="35" placeholder="XXXXX-XXXXX-XXXXX-XXXXX"><br>

<label><?php echo $contenido[4]; ?><span class="red">*</span>:</label>
<input type="text" name="fname" required placeholder="Rode" size="35"><br>

<label><?php echo $contenido[5]; ?><span class="red">*</span>:</label>
<input type="text" name="lname" required placeholder="Acevedo" size="35"><br>

<label><?php echo $contenido[6]; ?><span class="red">*</span>:</label>
<input type="text" name="email" required placeholder="email@utp.ac.pa" size="35"><br>

<label><?php echo $contenido[7]; ?><span class="red">*</span>:</label>
<input type="text" name="phone" required placeholder="911" size="35"><br>

<label><?php echo $contenido[8]; ?></label> 
<input type="text" name="address" placeholder="Costa del Este" size="35"><br>

<label><?php echo $contenido[9]; ?><span class="red">*</span>:</label>
<input type="text" name="country" placeholder="Panamá" size="35"><br>

<label><?php echo $contenido[10]; ?></label>
<input type="text" name="state" placeholder="Los Santos" size="35"><br>

<label><?php echo $contenido[11]; ?><span class="red">*</span>:</label>
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

<label><?php echo $contenido[12]; ?></label>
<input type="text" name="dntknow" size="35"><br>

<h5><?php echo $contenido[13]; ?></h5>

<input class=" botón" type="submit" name="submit" value= <?php echo $contenido[14]; ?> >

</div>
</form>


<?php include("lang.php");



 ?>


</div>
</body>
</html>