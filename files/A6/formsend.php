
<?php include ("lang.php");

$lang = $_POST['$lang'];

if (isset($_GET['lang']) && ($_GET['lang'])=='en'){
    $contenido = $english; 
    
	
	}
  else 
  {
  	if (isset($_GET['lang']) && ($_GET['lang']=='it')) 
  	{
  		$contenido = $italian;
  	
  		
  		
  	}
  	else 
  		{
			$contenido = $español;
			
  		}
  }


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
$pais = $_POST['valor'];
$codex = $_POST['nserie'];

echo "<h1>$contenido[17]</h1>";

echo "<hr>";
 
echo "<h3 style ='color:green; '>$contenido[16]</h3><br>";

echo "<p style='margin:4px; padding:5px;'> $contenido[4]:<b> $name </b> <b>$lname</b><br></p>";

echo "<p style='margin:4px; padding:5px;'>$contenido[6]: <b>$email</b><br></p>";

echo "<p style='margin:4px; padding:5px;'>$contenido[8]: <b>$country, $address, $state</b><br></p>";

echo "<p style='margin:4px; padding:5px;'>$contenido[7]: <b>$phone</b><br></p>";

echo "<p style='margin:4px; padding:5px;'>$contenido[12]: <b>$dntknow</b><br></p>";

echo "<p style='margin:4px; padding:5px;'>$contenido[11]: <b>$pais</b><br></p>";

echo "<p style='margin:4px; padding:5px;'>$contenido[3]: <b>$codex</b><br></p>";

echo "<h6 style='color:green; font-style:italic;'>$contenido[15].</h6><br>";
}

 ?>
