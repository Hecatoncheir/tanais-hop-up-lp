<?php
if(isset($_POST['form_name1']));
if(isset($_POST['form_email1']));
if(isset($_POST['form_vopros']));
if(isset($_POST['QypeEr']));
$name1 = htmlspecialchars(stripslashes($_POST['form_name1']));
$email1 = htmlspecialchars(stripslashes($_POST['form_email1'])); 
$vopros1 = htmlspecialchars(stripslashes($_POST['form_vopros']));
$QypeEr = htmlspecialchars(stripslashes($_POST['QypeEr'])); 
$submit1 = $_POST['web_form_submit1'];

if(isset($submit1) and ($email1 != "")){
	

/*формируем переменные, которые содержат данные, полученные с html-формы*/
	// $to = 'denjob@mail.ru';
	// $to = 'xyz@tanais.ru';
	$to = 'hopup@tanais.ru';
	// o = 'v.abramov@tanais.ru, rasart.pro@gmail.com';
	// $to = 'rasart.pro@gmail.com';
	$subject = 'LP HopUp. Заявка на мобильное приложение Directum с сайта tanais.ru ';

/* формируем кодировку правильную*/
$boundary = "--".md5(uniqid(time()));
$headers ="MIME-Version:1.0\n";
$headers .="From: web@tanais.ru\n";
$headers .="Content-Type:multipart/mixed; boundary=\"$boundary\"\n";
$multipart ="--$boundary\n";
$kod ='UTF-8';
$multipart .="Content-Type: text/html; charset=$kod\n";
$multipart .="Content-Transfer-Encoding: Quot-Printed\n\n";

// формируем расширенные заголовки
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
		$body = '<html>
		<head></head>
		<body><p>Адрес страницы: '.$_SERVER['SERVER_NAME'].'/HopUp/'.'</p><p>Имя: '.$_POST['form_name1'].'</p><p>Email: '.$_POST['form_email1'].'</p><p>Вопрос: '.$_POST['form_vopros'].'</p> <p>'.$QypeEr.'</p></body></html>';

$multipart .="$body\n\n";
	
   if (!mail($to,$subject,$body,$headers))
     echo "Ошибка при отправке сообщения.";

	 print"
<script language='Javascript' type='text/javascript'>
function reload()
{location = \"index.php?action=send_question\"}; 
setTimeout('reload()', 0);
</script>";
}
?> 
