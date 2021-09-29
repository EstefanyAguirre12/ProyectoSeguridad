<?php
require_once("../../app/models/usuario.class.php");
require_once("../../web/PHPMailer/class.phpmailer.php");
require_once("../../web/PHPMailer/class.smtp.php");

function ClaveNueva($length = 10) { 
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, $length); 
} 

try{
    $nueva= ClaveNueva();
	$object = new Usuario;
		if(isset($_POST['recuperar1'])){
            $_POST = $object->validateForm($_POST);
            if($object->setUsuario($_POST['usuario'])){
				// Se verifica la existencia del usuario y que tenga un estado "Activo"
				if($object->checkUsuario()){
                    $usuario= $_POST['usuario'];
                    $correo = $object->getCorreo();
                    $object->Recuperar($nueva);
                
                    $mail = new PHPMailer;

                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'luhos120@gmail.com';
                    $mail->Password = 'Estefany1';
                    $mail->SMTPSecure = 'ssl'; 
                    $mail->Port = 465;
                    $mail->setFrom('luhos120@gmail.com', 'LUHO');
                    $mail->addAddress($correo, 'Estimado Usuario');
                    $mail->isHTML(true);
                    $mail->Subject = 'Recuperacion de clave';
                    $mail->Body = '
                    <html  lang="es">
                    <head>
                    <meta charset="utf-8">
                    <style type ="txt/css">
                    h1{
                        color: #333131;
                    }
                    .l{
                        font-size: 13px;
                        color: #ada9a9;
                    }        
                    </style>
                    </head>
                    <body>
                    <h1> Recuperación de contraseña </h1> <p>LUHO le saluda, por medio de su usuario nos ha solicitado restablecer su contrasena. 
                    </p> <p> Para ingresar utiliza la nueva clave: <strong>'.$nueva.'</strong> <p>Recuerda cambiar de contraseña al acceder a tu cuenta.</p>  <br> <p> <strong> Le agradecemos su proferencia, </strong> </p> <p> L U H O ®. </p>
                    <p> ------------------- </p>
                    <p class="l" ><strong> L U H O ® </strong></p>
                    <p class="l"> <strong> "La elegancia y clase significa algo para ti? si es asi llamanos." </strong></p>
                    ';
                     

                    if(!$mail->send()){
                        throw new Exception("No se pudo enviar tu correo.". $mail->ErrorInfo);
                    }
                    else{
                        Page::showMessage(1, "Correo enviado", "../account/login.php");
                    }
						
						}else{
							throw new Exception("Correo inexistente");
						}
					
                }
                else{
                    throw new Exception("Correo no válido");
                }
			
                }
            
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}

//Controlador para llamar la vista de recuperar contra
 require_once("../../app/views/dashboard/account/recuperarview.php");

?>