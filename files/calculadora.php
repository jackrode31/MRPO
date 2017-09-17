<link rel="stylesheet" type="text/css" href="calculadora.css">

<?php

if (isset($_POST["button"])) {
	$num1= $_POST["num1"];
	$num2 = $_POST["num2"];
	$operacion = $_POST["operacion"];
	calcular($operacion);

}

function calcular($calculo){
	global $num2;
	global $num1;
	$resultado;

	switch ($calculo) {
		case 'Suma':
		$resultado=$num1+$num2;
		print("<p class ='resultado'> El resultado de la suma es: $resultado</p>" );
		break;
		
		case 'Resta':
		$resultado=$num1-$num2;
		print("<p class ='resultado'> El resultado de la suma es: $resultado</p>" );
		break;

		case 'Multiplicación':
		$resultado=$num1*$num2;
		print("<p class ='resultado'> El resultado de la suma es: $resultado</p>" );
		break;

		case 'División':
		$resultado=$num1/$num2;
		print("<p class ='resultado'> El resultado de la suma es: $resultado</p>" );
		break;

		case 'Módulo':
		$resultado=$num1%$num2;
		print("<p class ='resultado'> El resultado de la suma es: $resultado</p>" );
		break;

		default:
		print("Ha ocurrido un error.");
		break;
	}

}


?>
