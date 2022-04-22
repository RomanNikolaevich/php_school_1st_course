<?php
// Производим выход пользователя
session_start();//открытие сессии
unset($_SESSION['login']);//закрытие сессии по логину
session_destroy();//удаление сессии
setcookie('name1', 'Roman', time()-3600, '/'); //удаляю куки

// Редирект на главную страницу
header("Location:../index.php"); //переход на главную







