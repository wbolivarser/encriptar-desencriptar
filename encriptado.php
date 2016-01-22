<?php
require ("superior.php");
require ("inferior.php");
?>

<html>
<head>
<title>SISTEMA: Encriptado</title>

<?php superior();?>

</head>

<?php
$texto = $_POST["txttexto"];
$clave = $_POST["txtclave"];
$clave = md5($clave);
 
$seg = ($texto) . ("+") . ($clave);
$a = gzdeflate(serialize($seg));
$b = base64_encode($a);
?>
						
<h3>Encriptado</h3>
<center> <table> 
<tr> <td><center><b>Texto Encriptado:</b> <br>
<textarea name="txttexto" rows="20" cols="60" ><? echo $b ?></textarea></td> </center></tr>

<tr><td>
<h3><br>Enviar por Correo:</h3>
<form action="ecorreo.php" method="post">
<p><b>Nombre y Apellido(De)</b>:<br><input type="text" name="denombre" value="" /></p>
<p>Correo Electronico(De): <br><input type="text" name="deemail" id="deemail" value="" /></p>
<script type="text/javascript">
var fdeemail = new LiveValidation('deemail');
fdeemail.add( Validate.Email );
</script>

<p><b>Nombre y Apellido(Para)</b>: <br><input type="text" name="paranombre" value="" /></p>
<p>Correo Electronico(Para): <br><input type="text" name="paraemail" id="paraemail" value="" /></p>

<script type="text/javascript">
var fparaemail = new LiveValidation('paraemail');
fparaemail.add( Validate.Email );
</script>

<textarea name="msj" style="display:none"><? echo $b ?></textarea>

<input type="submit" name="envio" value="Enviar"/>
</form>
</td></tr>
</table> 
</center>
</div>
</div>


<?php inferior();?>							 
