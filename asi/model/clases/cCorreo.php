<?php


  class Correo {

    function enviarCorreo($destino, $nombreDestino ,$asunto, $correo ){

      date_default_timezone_set('America/El_Salvador'); //Se define la zona horaria
      require_once('phpmailer/class.phpmailer.php'); //Incluimos la clase phpmailer

      $mail = new PHPMailer(true); // Declaramos un nuevo correo, el parametro true significa que mostrara excepciones y errores.

      $mail->IsSMTP(); // Se especifica a la clase que se utilizará SMTP

      //------------------------------------------------------
        $correo_emisor="ases.sv@gmail.com";     //Correo a utilizar para autenticarse
      					     //Gmail o de GoogleApps
        $nombre_emisor="Asociacion Scout de El Salvador";               //Nombre de quien envía el correo
        $contrasena="asi2equipo1";          //contraseña de tu cuenta en Gmail
        //$correo_destino="alexisrivas203@gmail.com";      //Correo de quien recibe
        //$nombre_destino="Putolin";                //Nombre de quien recibe   	
      //--------------------------------------------------------
        $mail->SMTPDebug  = 2;                     // Habilita información SMTP (opcional para pruebas)
                                                   // 1 = errores y mensajes
                                                   // 2 = solo mensajes
        $mail->SMTPAuth   = true;                  // Habilita la autenticación SMTP
        $mail->SMTPSecure = "tls";                 // Establece el tipo de seguridad SMTP
        $mail->Host       = "smtp.gmail.com";      // Establece Gmail como el servidor SMTP
        $mail->Port       = 587;                   // Establece el puerto del servidor SMTP de Gmail
        $mail->Username   = $correo_emisor;  	     // Usuario Gmail
        $mail->Password   = $contrasena;           // Contraseña Gmail
        //A que dirección se puede responder el correo
        $mail->AddReplyTo($correo_emisor, $nombre_emisor);
        //La direccion a donde mandamos el correo
        $mail->AddAddress($destino, $nombreDestino);
        //De parte de quien es el correo
        $mail->SetFrom($correo_emisor, $nombre_emisor);
        //Asunto del correo
        $mail->Subject = $asunto;
        //Mensaje alternativo en caso que el destinatario no pueda abrir correos HTML
        //$mail->AltBody = 'Hijole para ver el mensaje necesita un cliente de correo compatible con HTML.';
        //El cuerpo del mensaje, puede ser con etiquetas HTML
        $mail->MsgHTML("<strong>".$correo."</strong>");
        //Archivos adjuntos
        //$mail->AddAttachment('img/logo.jpg');      // Archivos Adjuntos
        
        //Enviamos el correo
        $mail->Send();
        
        //echo "<div style='text-align:center'>Mensaje enviado. Que chivo va vos!!</div>";
      
      }    
    }
?>
