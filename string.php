<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>



<style>
	
.resaltar {


	color: red;
	font-weight: bold;
}

</style>
<body>


<?php

echo "<p class ='resaltar'>Holaaaaa</p>";
echo "Vamos a comparar cadenas<br>";

$string1= "Roderik";
$string2 ="Roderik";
$resultado;

$resultado = strcasecmp($string1, $string2);

if ($resultado) {

	print("no son iguales");
	
}
else {
	print("sin son iguales");
}


?>

</body>
</html>




