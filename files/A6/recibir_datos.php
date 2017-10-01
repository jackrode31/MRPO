<?php 

echo "<center><h3>Datos Ingresados</h3></center>";
echo "<table border='1' align = 'center' bgcolor= '#AA6699'>";
echo "<tr bgcolor='#669966'>";
echo "<th>";
echo "Nombre de variable <br>";
echo "de formulario";
echo "</th>";
echo "<th>";
echo "Valor Introducido";
echo "</th>";

foreach ($_GET as $nomb_camp => $val) {
	echo "<tr><td>.$nomb_camp</td>";
	echo "<td>";
	if (gettype($val)=="array") 
	{
		foreach ($val as $ele) 
		{
			echo $ele. "<br>";
		}
	}
	else {
		echo $val;
		echo "</td>";
		echo "</tr>";
	}
}
echo "</table> <br>";


 ?>