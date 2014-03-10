<html>
<head>
<title>PHPMailer - MySQL Database - SMTP basic test with authentication</title>
</head>
<body>

<?php

//error_reporting(E_ALL);
error_reporting(E_STRICT);

date_default_timezone_set('America/Toronto');

require_once('../class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail                = new PHPMailer();

$body                = file_get_contents('template.html');
$body                = preg_replace('/[\]/','',$body);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPAuth      = true;                  // enable SMTP authentication
$mail->SMTPKeepAlive = true;                  // SMTP connection will not close after each email sent
$mail->Host          = "mail.99yrs.com"; // sets the SMTP server
$mail->Port          = 587;                    // set the SMTP port for the GMAIL server
$mail->Username      = "vijay@99yrs.com"; // SMTP account username
$mail->Password      = "123456";        // SMTP account password
$mail->SetFrom('vijay@99yrs.com', 'Vijay W');
$mail->AddReplyTo('vijay@99yrs.com', 'Vijay ]');

$mail->Subject       = "PHPMailer Test Subject via smtp, basic with authentication";

  $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
  $mail->MsgHTML("Test email from localhost");
  $mail->AddAddress('vijay@99yrs.com', 'vijay w');


  if(!$mail->Send()) {
    echo "Mailer Error (" . str_replace("@", "&#64;", $row["email"]) . ') ' . $mail->ErrorInfo . '<br />';
  } else {
    echo "Message sent to :" . $row["full_name"] . ' (' . str_replace("@", "&#64;", $row["email"]) . ')<br />';
  }
  // Clear all addresses and attachments for next loop
  $mail->ClearAddresses();
  $mail->ClearAttachments();

?>

</body>
</html>
