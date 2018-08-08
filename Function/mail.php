<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
	require '../vendor/autoload.php';
// To load the French version
	$mail->setLanguage('fr', '/optional/path/to/language/directory/');

	// Create a new PHPMailer instance
	$mail = new PHPMailer;
	
	//Enable SMTP
	$mail->isSMTP();

	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 2;

	// Set a host
	$mail->Host = 'smtp.gmail.com';
	// Set a port
	$mail->Port = 587;
	// Set type of protection
	$mail->SMTPSecure = 'tls';
	// Set authentication to true
	$mail->SMTAuth = true;
	//Set login details for Gmail account
	$mail->Username = "andrade.meilyn@gmail.com";
	$mail->Password = "003160Gm.."

	$mail->setFrom(address : 'andrade.meilyn@gmail.com', 'First Last');
	$mail->addReplyTo('replyto@example.com', 'First Last');
	$mail->addAddress('whoto@example.com', 'John Doe');
	// Set subjet
	$mail->Subject = 'PHPMailer GMail SMTP test';
	// Set Body
	$mail->AltBody = 'This is a plain-text message body';

	if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";

}

	function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);
    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);
    return $result;
}


?>
