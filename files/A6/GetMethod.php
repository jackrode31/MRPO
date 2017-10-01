<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Conversión Dec a Bin</title>
</head>
<body>
	 <center>
	 	<h3>Conversión de un decimal a binario</h3>
	 	<form action="http://localhost/MRPO/files/A6/GetMethod.php" method="get">
	 		Introducir numero a convertir
	 		<input type="text" name="num" maxlength="5" size="5">
	 		<input type="submit" name="envio">
	 	</form>

	 	<?php 

	 		if (!empty($_GET["num"])) {
	 			$NumDecimal=$_GET["num"];
	 			echo "El numero decimal es: <b>$NumDecimal</b><br>";
	 			$NumBinario=' ';

	 			do{
	 				$NumBinario= $NumDecimal%2 . $NumBinario;
	 				echo "Resultado intermedio: <b> $NumBinario</b><br>\n";
	 				$NumDecimal=(int)($NumDecimal/2);
	 			}while ($NumDecimal>0);
	 			
	 			echo "Numero binario resultante: <b>$NumBinario</b><br>";
	 		}

	 	 ?>
	 </center>

</body>
</html>