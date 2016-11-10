<?php
session_start();
require_once("../bd/conect.php");
require 'phpmailer/class.phpmailer.php';
require 'phpmailer/class.smtp.php';
$mail = new PHPMailer();   
$mail->IsHTML(true);
$mail->IsSMTP();   
//$mail->Host = 'smtp-relay.gmail.com'; 
$mail->Host = 'a2plcpnl0844.prod.iad2.secureserver.net'; 
$mail->SMTPDebug  = 2;
$mail->Port = 465; 
$mail->SMTPAuth = true; 
$mail->SMTPSecure="ssl";
$mail->Username = 'notificaciones@theherbangroupinc.com'; 
$mail->Password = '~ycDJe7DAxpB';  
$mail->From = "notificaciones@delphi.com";   
$mail->FromName = "Delphi Planta 2";
$mail->AddReplyTo('notificaciones@delphi.com', 'Delphi Planta 2');   
$mail->Subject = "Asistencia";

$sql="SELECT * FROM personal";
$resultado=mysqli_query($con,$sql);
if(mysqli_num_rows($resultado)>0){
        while($reg = mysqli_fetch_assoc($resultado)){
        $_SESSION["email"]=$reg["correo_personal"];
		$mail->AddAddress("$_SESSION[email]");
	}
}
		$body = "
		<html>
		<head>
		<title>Confirma tu Asistencia</title>
		</head>
		<body>
		Hola buenos dias, puedes confirmar si asistiras o no al trabajo en el siguiente link aqui.
		</body>
		</html>
		";
		$mail->Body = $body;
		if( !$mail->Send() ) 
		{  
			echo "Error al enviar correos";
		}else{
    		echo "Correos enviado";
    	}
  
mysqli_close($con);
?>

