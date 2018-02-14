<?php 
	$username=$_POST['username'];
	$email=$_POST['email'];
	$user_message=$_POST['user_message'];


	$to = 'kukharev97@mail.ru';
	$subject = "Заявка с сайта.";
	$message = '
	Имя пользвателя: '.htmlspecialchars($username).'<br>
	Email: '.htmlspecialchars($email).'<br>
	Сообщение: '.htmlspecialchars($user_message);

	$headers = "From: jurykuha.github.io/1/ <user@jurykuha.github.io/1/>\r\nContent-type: text/html; charset=UTF-8 \r\n";
	mail ($to, $subject, $message, $headers);
	header('Location: thanks.html');
	exit();  
  ?>