<? 
$denombre = $_POST['denombre'] ;
$deremitente = $_POST['deemail'] ;
$paranombre = $_POST['paranombre'] ;
$destino = $_POST['paraemail'] ;
$txt = $_POST['msj'] ;
$asunto = "[Mensaje Encriptado]" ;

$mensaje ='
<html>
<head>
  <title>[Mensaje Encriptado]</title>
</head>
<body>
<p>Buen dia '.$paranombre.', <br> <br> '.$denombre.' te mando un mensaje encriptado.
  <table>
    <tr>
      <td><b>Tu mensaje encriptado es:</b><br></td>
    </tr>
    <tr>
      <td>'.$txt.'</td>
    </tr>
 <tr>
      <td><br>
      Necesitas comunicarte con '.$denombre.' para que pueda facilitarte la clave de desencriptacion del texto.
    </tr>
 <tr>
      <td><br><br><hr>
      <p>Los Administradores del Sistema de Encriptar no se hacen responsable por el uso que se le pueda dar al sistema o el envio de correo no deseados. Si usted no esta de acuerdo en seguir recibiendo correos electronicos de nuestro sistema de encriptacion, favor utilizar el formulario de contacto y hacernos llegar sus denuncias.<br></p><center>
            <p><center>Agradecimiento Especial a: Daisy Vargas (DaisyVrgs) | Copyleft &copy; Wuilmer Bolivar (ElWuilMeR)</p>
<hr>
</center>

    </tr>    
  </table>
</body>
</html>'; 

$encabezados = "From: $denombre $deremitente\nReply-To: $denombre $deremitente\nContent-Type: text/html; charset=ISO-8859-1\nMIME-Version: 1.0" ;
mail($destino, $asunto, $mensaje, $encabezados);
echo "<script language='JavaScript'>alert('.:Mensaje enviado correctamente:.');</script>"; 
echo "<script>document.location.href='index.php';</script>"; 
?>
