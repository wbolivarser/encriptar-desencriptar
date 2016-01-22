<?php
function leer_archivo(){
$uploaddir = 'archivos/';
$uploadfile = $uploaddir . basename($_FILES['arc_usr']['name']);
$arc = $uploaddir . strtolower($_FILES['arc_usr']['name']);
$listblanca = array('txt'); 
$listnegra = array('php', 'php3', 'php4', 'phtml','exe');
if($_FILES['arc_usr']['type']=="text/plain"){
   if (move_uploaded_file($_FILES['arc_usr']['tmp_name'], $uploadfile)) 
   {
	$arc = $uploaddir . $_FILES['arc_usr']['name'];
	$archi = file($arc);
	$lineas = count($archi);
 
		for($i=0; $i < $lineas; $i++)
		{ echo $archi[$i]; } 

} else {
    echo ".:ALERTA:. Posible ataque de Archivos";
}
	}

}

?>