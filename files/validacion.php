<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:50px;
		color:#F00;
		font-weight:bold;
		text-align: center;
	}
	
	.validado{
		font-size:50px;
		color:#0C3;
		font-weight:bold;
		text-align: center;
	}


</style>


<?php


if (isset($_POST["enviando"])) {
	
	$user = $_POST["nombre_usuario"];
	$edad = $_POST["edad_usuario"];

	 if ($user=="Rode") {
	 	print("<p class = 'validado'>Bienvenido $user</p>");
	 } else {
	 	# code...
	 	print("<p class ='no_validado'>dale de aqui $user</p>");
	 }
	 
}


?>