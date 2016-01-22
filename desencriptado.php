<?php
require ("superior.php");
require ("inferior.php");
?>

<html>
<head>
<title>SISTEMA: Desencriptado</title>

<?php superior();?>

</head>

<?php

$texto = $_POST["txttexto"];
$clave = $_POST["txtclave"];
$pass = md5($clave);

	if ($texto == ""){  
echo "<script language='JavaScript'>alert('Debe colocar una texto a Desencriptar...');</script>";
echo "<script>document.location.href='desencriptar.php';</script>"; }
	if ($clave == "d41d8cd98f00b204e9800998ecf8427e"){  
echo "<script language='JavaScript'>alert('Debe colocar una clave de Desencriptacion...');</script>";
echo "<script>document.location.href='desencriptar.php';</script>"; }
			
$x = base64_decode($texto);
$z = unserialize(gzinflate($x));
$seg = explode("+",$z);
$msj = $seg[0];
$clavenc = $seg[1];
?>
 
<h3>Desencriptado</h3>
<center> <table> 
<tr> <td><center><b>Texto Desencriptado:</b> <br>
<textarea name="txttexto" rows="20" cols="60"><? if ($clavenc == $pass){ echo $msj; } else { echo "La Clave de Desencriptacion es Incorrecta..."; } ?></textarea>
</td> </center></tr>
</table> </center>
</form>
</div>
</div>


<?php inferior();?>
