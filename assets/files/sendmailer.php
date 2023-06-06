<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	require './PHPMailer-master/src/Exception.php';
	require './PHPMailer-master/src/PHPMailer.php';
	require './PHPMailer-master/src/SMTP.php';
	
	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	$mail->setLanguage('ru', './PHPMailer-master/language/' )
	$mail->isHTML(true);
	$mail->isSMTP();

	$mail->Host = 'smtp.mail.ru';
	$mail->SMTPAuth = true;
	$mail->Username = 'danik999985@mail.ru';
	$mail->Password = '123581321morozov';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;




	$mail->setFrom('myLandingPage', 'Danik');
	$mail->addAddress('tehnikdaniyar@gmail.com');
	$mail->Subject = 'Order on work';

	$body = '<h1>Hello</h1>';

	$mail->Body = $body;

	if($mail->send()) {
		$message = 'ok';
	} else {
		$message = 'error';
	};

	$response = ['message' => $message];
	
	header('Content-type: application/json');
	echo json_encode($response);

