<?php
require ("superior.php");
require ("inferior.php");
?>

<html>
<head>
<title>SISTEMA: Desencriptar</title>

<?php superior();?>

</head>
					
<h3>Desencriptar</h3>
<form action="desencriptado.php" method="post">
<center> <table> 
<tr> <td><center><b>Texto a Desencriptar:</b> <br>
<textarea name="txttexto" rows="20" cols="60" ></textarea></td> </center></tr>
<tr> <td><center><b>Clave de Desencriptacion:</b><br>
<input type="password" name="txtclave" size="20" > </td> </center> </tr>
 <tr>
<td> <center><br>
<input type="submit" value="Enviar">   
<input type="reset" value="Borrar"> </center>  
</td> </tr>
</table> </center>
</form>
</div>
</div>

<?php inferior();?>
