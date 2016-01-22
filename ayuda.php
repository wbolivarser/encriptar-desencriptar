<?php
require ("superior.php");
require ("inferior.php");
?>

<html>
<head>
<title>SISTEMA: Ayuda</title>

<?php superior();?>

</head>
			
<h3>Ayuda</h3>
<ul class="list1">
<li>
<img src="images/img-wrapper.jpg" alt="" /><strong><a href="encriptar.php">Encriptar Datos</a></strong> 
1. Entramos en: <a href="encriptar.php"><b>Encriptar Datos.</b></a> <br>
2. En: "Texto a Encriptar", escribimos la informacion a encriptar. <br>
3. Escribimos una "Clave" privada con la cual sera encriptado el texto.<br>
</li>

<li><img src="images/img-wrapper.jpg" alt="" /><strong> <a href="desencriptar.html">Desencriptar Datos</a></strong>
1. Entramos en: <a href="desencriptar.html"><b>Desencriptar Datos.</b></a> <br>
2. En: "Texto a Desencriptar", escribimos la informacion a desencriptar. <br>
3. Escribimos la "Clave" privada con la cual fue encriptado el texto. <br>
</li>

<li><img src="images/img-wrapper.jpg" alt="" /><strong> <a href="qr.php">Codigo QR</a></strong>
1. Entramos en: <a href="qr.php"><b>Codigo QR.</b></a> <br>
2. En: "Texto a QR", escribimos la informacion a pasar a QR. <br>
3. Seleccionamos "ECC" y "Fuente", luego pulsamos "Crear QR". <br>
</li>

</ul>
</div>
</div>

<?php inferior();?>