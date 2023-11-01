<?php
	include 'html/header.html';

	if (isset($_POST['name']) && isset($_POST['phone'])) {
		$name = htmlentities($_POST['name']);
		$phone = htmlentities($_POST['phone']);
		$output = "
		<div class='stats-text'>
			<h2>Спасибо, что выбрали нас!</h2>
			<p>Мы отправили Ваши данные администратору</p>
			<p>$name, с Вами свяжутся по номеру: $phone</p>
		</div>";
		echo $output;
	}
	else {
		echo 'Введённые данные некорректны';
	}
	include 'html/footer.html';
?>