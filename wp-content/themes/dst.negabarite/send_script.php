<?php

if (isset($_POST["yourName"])) { $person_name = $_POST["yourName"];}
if (isset($_POST["yourMail"])) { $person_mail = $_POST["yourMail"];}
if (isset($_POST["phoneNumber"])) { $person_phone = $_POST["phoneNumber"];}
if (isset($_POST["serviceType"])) { $service_type = $_POST["serviceType"];}


$mail_to = "syd.phoenix@gmail.com"; 
// info@kweb.studio
$mail_from = "Новая заявка на KWeb.studio" . "\n";
$mail_body = '<html>  
<head>  
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">  
	<title>Новая заявка на сайте Kweb</title>  
</head>
<body>  
	<table width="100%" cellpadding="0" cellspacing="0"><tr><td>  
		<table id="top-message" cellpadding="0" cellspacing="0" bgcolor="ffffff"><tr><td><img src="https://png.icons8.com/ios/50/000000/da-vinci.png" style="width: 20px; height: 20px;"></td><td><p style="margin: 5px 0; padding-left: 10px;">От кого: '. $person_name .'</p></td></tr></table>

		<table id="main" cellpadding="0" cellspacing="0" bgcolor="ffffff"><tr><td><img src="https://png.icons8.com/ios/50/000000/phone.png" style="width: 20px; height: 20px;"></td><td><p style="margin: 5px 0; padding-left: 10px;">Номер телефона: '.$person_phone.'</p></td></tr></table>

		<table id="bottom-message" cellpadding="0" cellspacing="0" bgcolor="ffffff"><tr><td><img src="https://png.icons8.com/ios/50/000000/important-mail.png" style="width: 20px; height: 20px;"></td><td><p style="margin: 5px 0; padding-left: 10px;">Адрес почты: '.$person_mail.'</p></td></tr></table>

		<table id="bottom-message" cellpadding="0" cellspacing="0" bgcolor="ffffff"><tr><td><img src="https://png.icons8.com/ios/50/000000/administrative-tools.png" style="width: 20px; height: 20px;"></td><td><p style="margin: 5px 0; padding-left: 10px;">Список услуг: '.$service_type.'</p></td></tr></table>
	
	</tr></td>
</table>
</body>  
</html>';
$headers  = "Content-type: text/html; charset=utf-8 \r\n";

$result = mail ($mail_to, $mail_from, $mail_body, $headers);

?>
