<?php
function leer(){
$uploaddir = 'archivos/';
$uploadfile = $uploaddir . basename($_FILES['arc_usr']['name']);
$arc = $uploaddir . strtolower($_FILES['arc_usr']['name']);
$listblanca = array('txt'); 
$listnegra = array('php', 'php3', 'php4', 'phtml','exe'); 
if(!in_array(end(explode('.', $arc)), $listblanca))
{
    	echo "<script language='JavaScript'>alert('.:ALERTA:. Tipo de Archivo NO PERMITIDO.');</script>";
    	echo "<script>document.location.href='ip.php';</script>";
    exit(0);
}
if(in_array(end(explode('.', $arc)), $listnegra))
{
    	echo "<script language='JavaScript'>alert('.:ALERTA:. Tipo de Archivo NO PERMITIDO.');</script>";
	echo "<script>document.location.href='ip.php';</script>";
    exit(0);
}

	}
?>