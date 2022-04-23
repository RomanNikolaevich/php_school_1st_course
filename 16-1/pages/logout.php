<?php
// Производим выход пользователя
unset($_SESSION['login']);//закрытие сессии по логину
session_destroy();//удаление сессии
setcookie("login","");
setcookie("password","");

// Редирект на главную страницу
//header("location:login.php");//переход на главную







