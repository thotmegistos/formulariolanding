<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="MAVIA - Register, Reservation, Questionare, Reviews form wizard">
	<meta name="author" content="Ansonika">
	<title>MAVIA | Register, Reservation, Questionare, Reviews form wizard</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">
    
	<script type="text/javascript">
    function delayedRedirect(){
        window.location = "index.html"
    }
    </script>

</head>
<body onLoad="setTimeout('delayedRedirect()', 8000)" style="background-color:#fff;">
<?php
						/**$mail = $_POST['email'];
						$to = "kbarreiro@hexamedia.co";
						$subject = "Actualización y registro de datos | Expreso Palmira";
						$headers = "From:Expreso Palmira Pruebas <noreply@yourdomain.com>";
						$message = "Información Formulario\n";
						$message .= "\nNombre: " . $_POST['firstname'];
						$message .= "\nApellido: " . $_POST['lastname'];
						$message .= "\nTipo de documento: " . $_POST['tdocumento'];
						$message .= "\nNúmero de documento: " . $_POST['numerod'];
						$message .= "\nFecha de nacimiento: " . $_POST['age'];
						$message .= "\nGenero: " . $_POST['gender'] . "\n";
						$message .= "\nEmail: " . $_POST['email'];
						$message .= "\nTelefono: " . $_POST['telephone'];
						$message .= "\nLugar de residencia: " . $_POST['direccion'];
						$message .= "\nTerminos y condiciones(Habeas data ): " . $_POST['terms'];
												
						//Receive Variable
						$sentOk = mail($to,$subject,$message,$headers);
						
						//Confirmation page
						$user = "$mail";
						$usersubject = "Thank You";
						$userheaders = "From: info@mavia.com\n";
						$usermessage = "Thank you for your time. Your quotation request is successfully submitted.\n"; WITH OUT SUMMARY
						Confirmation page WITH  SUMMARY
						$usermessage = "Thank you for your time. Your request is successfully submitted. We will reply shortly.\n\nBELOW A SUMMARY\n\n$message"; 
						mail($user,$usersubject,$usermessage,$userheaders);**/
						
						$email = $_POST['email'];
						$nombres = $_POST['firstname'];
						$apellidos = $_POST['lastname'];
						$tipo_document = $_POST['tdocumento'];
						$documento = $_POST['numerod'];
						$fecha_nac = $_POST['age'];
						$genero = $_POST['gender'];
						$email = $_POST['email'];
						$telefono = $_POST['telephone'];
						$direccion = $_POST['direccion'];
						$term = $_POST['terms'];

						$wsdl = "http://190.85.141.28:6161/WSExpal/Expal?wsdl";
						$params = $tipo_document.';'.$documento.';'.$genero.';'.$nombres.';'.$apellidos.';'.$fecha_nac.';'.$email.';'.$telefono.';'.$direccion.';'.$term;
						$request = array("parametros" => $params);
						$cliente = new SoapClient($wsdl);
						$response = $cliente->__call('crmClienteUltra', array("parameters" => $request));
?>
<!-- END SEND MAIL SCRIPT -->   

<div id="success">
    <div class="icon icon--order-success svg">
              <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                <g fill="none" stroke="#8EC343" stroke-width="2">
                  <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                  <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                </g>
              </svg>
     </div>
<h4><span>Request successfully sent!</span>Thank you for your time</h4>
<small>You will be redirect back in 5 seconds.</small>
</div>
</body>
</html>