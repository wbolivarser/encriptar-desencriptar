<?php
require ("superior.php");
require ("inferior.php");
require ("archivo.php");
require ("archivo_leer.php");
?>

<html>
<head>
<title>SISTEMA: Encriptar</title>
<script type="text/javascript" src="js/si.files.js"></script>
<style type="text/css" title="text/css">
.SI-FILES-STYLIZED label.cabinet
{
	width: 79px;
	height: 22px;
	background: url(images/button-399.png) 0 0 no-repeat;

	display: block;
	overflow: hidden;
	cursor: pointer;
}
.SI-FILES-STYLIZED label.cabinet input.file
{
	position: relative;
	height: 100%;
	width: auto;
	opacity: 0;
	-moz-opacity: 0;
	filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);
}
</style>

</head>

<?php superior();?>
								
<h3>Encriptar</h3>
<center> 
<table>
<form enctype="multipart/form-data" action="#" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="5120" />
<tr><td><b><font color=red>Subir Archivo: <br><font color=blue><font size=2>Encriptar (*.TXT) -5Kb</font></font> </font></b><br>
<label class="cabinet"> <input name="arc_usr" type="file" class="file" /></label> <input type="image" src="images/button-340.png" ></tr></td>
<?php $arc = $_FILES['arc_usr']['name']; if ($arc == "") { echo ""; } else { leer(); }?>
</form>

<form action="encriptado.php" method="post"> 
<tr> <td><center><b>Texto a Encriptar:</b> <br>
<textarea name="txttexto" rows="20" cols="60" id="txttexto" ><?php $arc = $_FILES['arc_usr']['name']; if ($arc == "") { echo ""; } else { leer_archivo(); } ?></textarea></td> </center></tr>
<tr> <td><center><b>Clave de Encriptacion:</b><br>
<input type="password" name="txtclave" size="20" > </td> </center> </tr>

<tr> <td> <center><br>
<input type="submit" value="Enviar">   
<input type="reset" value="Borrar"> </center>  
</td> </tr>
</table> 
</center>
</form>

</div>
</div>

<script type="text/javascript" language="javascript">
SI.Files.stylizeAll();
</script>
		
<?php inferior();?>
