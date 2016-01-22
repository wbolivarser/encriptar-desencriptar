<html>
<head>
<title>SISTEMA: Codigo QR</title>

<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Myriad_Pro_300.font.js" type="text/javascript"></script>
<!--[if lt IE 7]>
	<script type="text/javascript" src="js/ie_png.js"></script>
	<script type="text/javascript">
		 ie_png.fix('.png, #header .row-2 ul li a, #content, .list li');
	</script>
<![endif]-->
</head>

<body id="page1" style="text-align: justify;">
<div class="tail-top">
	<div class="tail-bottom">
		<div class="body-bg">

			<!-- HEADER -->
			<div id="header">
				<div class="extra"><img src="images/header-img.jpg" alt="" /></div>
				<div class="row-1">
		<div class="fleft"><a href="index.html"><img src="images/logo.png" alt="" /></a></div>
		<div class="fright"><img src="images/logo_IUTLL.png" alt="" /></div>
				</div>
				
				<div class="row-2">
					<ul>
						<li class="m1"><a href="index.php" class="active">Principal</a></li>
						<li class="m2"><a href="encriptar.php">Encriptar</a></li>
						<li class="m3"><a href="desencriptar.php">Desencriptar</a></li>
						<li class="m3"><a href="qr.php">Codigo QR</a></li>
						<li class="m4"><a href="ayuda.php">Ayuda</a></li>
						<li class="m5"><a href="contacto.php">Contacto</a></li>
						
					</ul>
				</div>

<div class="row-3">
<img src="images/slogan.png" alt="" />
<br>
<h2><font color="white">By: Wuilmer Bolivar </font></h2>
</div>
			        </div>



<!-- CONTENT -->
<div id="content">
<div class="tail-right">
<div class="wrapper">
<div class="col-1">
<div class="indent">
<div class="indent1">
	<h3>Codigo QR</h3>
	
	
<center>
<?php    
     
    //set it to writable location, a place for temp generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';

    include "phpqrcode/qrlib.php";    
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
    $filename = $PNG_TEMP_DIR.'qrwb.png';
    
    //processing form input
    //remember to sanitize user input in real-life solution !!!
    $errorCorrectionLevel = 'Q';
    if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
        $errorCorrectionLevel = $_REQUEST['level'];    

    $matrixPointSize = 10;
    if (isset($_REQUEST['size']))
        $matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);


    if (isset($_REQUEST['data'])) { 
    
        //it's very important!
        if (trim($_REQUEST['data']) == '')
            die('Los datos no pueden estar vacio! <a href="?">Regresar</a>');
            
        // user data
        $filename = $PNG_TEMP_DIR.'qrwb'.md5($_REQUEST['data'].'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
        QRcode::png($_REQUEST['data'], $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
    } else {    
    
          //default data
        QRcode::png('Daisy Vargas Te Amo', $filename, $errorCorrectionLevel, $matrixPointSize, 2); 
        
    }    
        
    //display generated file
    echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" /><hr/>';  
    
    //config form
    echo '<form action="qr.php" method="post">
        Texto:&nbsp;<input name="data" value="'.(isset($_REQUEST['data'])?htmlspecialchars($_REQUEST['data']):'Texto a QR').'" />&nbsp;
        ECC:&nbsp;<select name="level">
            <option value="L"'.(($errorCorrectionLevel=='L')?' selected':'').'>L - Inferior</option>
            <option value="M"'.(($errorCorrectionLevel=='M')?' selected':'').'>M</option>
            <option value="Q"'.(($errorCorrectionLevel=='Q')?' selected':'').'>Q</option>
            <option value="H"'.(($errorCorrectionLevel=='H')?' selected':'').'>H - Superior</option>
        </select>&nbsp;
        Fuente:&nbsp;<select name="size">';
        
    for($i=1;$i<=10;$i++)
        echo '<option value="'.$i.'"'.(($matrixPointSize==$i)?' selected':'').'>'.$i.'</option>';
        
    echo '</select>&nbsp;
        <input type="submit" value="Crear QR"></form><hr/>';
?>        

</center>	
	
	
	
	
</div>

	<h4>¿Que es?:</h4>
	<ul class="list">
<li><a href="http://es.wikipedia.org/wiki/C%C3%B3digo_QR">Un código QR </a> (quick response code, «código de respuesta rápida») es un módulo útil para almacenar información en una matriz de puntos o un código de barras bidimensional creado por la compañía japonesa Denso Wave, subsidiaria de Toyota, en 1994. Se caracteriza por los tres cuadrados que se encuentran en las esquinas y que permiten detectar la posición del código al lector. Para mas informacion visita: <a href="http://www.wayerless.com/tag/codigos-qr/"> www.wayerless.com/codigos-qr</a>.</li>

<li><p>Para usar el generador de <b>Codigos QR</b> solo necesitas reemplazar el texto que dice: "Texto a QR" por el Texto que desea pasar a Codigo QR, puedes ademas cambiar la posicion "ECC" y tamaño de la "Fuente".</p></li>
	</ul>
<br>
	
	
	
	
	
	
	
</div>
</div>
						
<div class="col-2">
							<ul>
<li><strong><a href="index.php">Principal</a></strong>Pagina Principal.</li>
<li><strong><a href="encriptar.php">Encriptar</a></strong>Pagina de Encriptacion de Datos.</li>
<li><strong><a href="desencriptar.phpl">Desencriptar</a></strong>Pagina de Desencriptacion de Datos.</li>
<li><strong><a href="qr.php">Codigo QR</a></strong>Pagina para Generar Codigos QR.</li>
<li><strong><a href="ayuda.php">Ayuda</a></strong>Pregutas Frecuentes.</li>
<li><strong><a href="contacto.php">Contacto</a></strong>Formulario de Contacto.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- FOOTER -->
			<div id="footer">
				<div class="indent">
<center>				
<div class="fleft">Agradecimiento Especial a: <b>Daisy Vargas (DaisyVrgs)</b> |

Facebook <a href="http://www.facebook.com/daisyVrgs">www.facebook.com/DaisyVrgs</a></div>
<br>

					<div class="fright">Copyright &copy; 2013 - Wuilmer Bolivar</div>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>



       

    