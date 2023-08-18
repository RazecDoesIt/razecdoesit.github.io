<?php

	$from = $_POST['sender'];

	$to = $_POST['receiver'];

	$subject = $_POST['assunto'];

	$message = $_POST['mensagem'];

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1'. "\r\n";
	$headers .= 'From: Eu ' . $from . "\r\n" .
			    'Reply-To: ' . $from . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status==true){
		print "Enviou mensagem";
	}else{
		print "Não foi possível enviar";
	}