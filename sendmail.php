<?php
header('Content-Type: text/html; charset=utf-8');
//$userName = $_GET['user_name'];
$userName = $_POST['user_name'];
//указывается тоже имя что и в форме, обязательно ставить точку с запятой
//mail('commandor1981@gmail.com', 'Тестовое письмо', "Привет, $userName");
echo "Hello! $userName";
