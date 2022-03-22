<?php
// PHP с нуля - 1 урок - Основы языка и синтаксиса
1-1
/*
* Если нам нужно, чтобы часть кода ниже команды перестала обрабатываться, то мы прописываем следующее:
* <?php exit; ?>
*/
1-2
/*
* echo 'Hello World';
* echo - значит вывести на экран, 'это то что мы хотим вывести на экран', а ';' - это значит мы закончили команду.
*/
1-3
/*
 * Правило №1 текст выводится в кавычках '', а цифры без кавычек.
 * Если цифры часть текста, то тоже в кавычках.
 * 		echo '<b>Hello World</b>';
 *		echo  321;
 */
1-4
/*
 * Математические операции пишем в скобках:
 * echo (1+1);
 */
1-5
/*
 * Можно в начале кода прописать переменные, а потом где-то в середине им пользоваться, например:
 * <?php $num=7;
 * $text = 'Hello World'
 <?php echo $text?>
*/
1-6
/*
 * Правило програмирования №2:
 * PHP выполняется сверху вниз, слева на право!
 * Например: echo $text3; $text3 = 'Vasya'; - не правильно!
 * Правильно: $text3 = 'Vasya'; echo $text3;
 */
1-7
/*
 * Правило №3 РНР код всегда выполняется с нуля, с нулевой строчки кода!
 * То есть если у клиента открылась страница, код считался, то он и будет отображаться
 * а если часть кода скрыть, то при повторном запросе /обновлении страницы  - выдаст ошибку по этому коду!
 */
1-8
/*
 * РНР код можно сократить - вместо: <?php echo $title; ?>
 * можно записать: <?=$title;?> - это короткая запись по выводу команды
 */

// PHP с нуля - 2 урок - работа сервера, переменные, типы данных
// Урок 2: Углубляемся в типы данных и переменные

2-1
/*
 *После запроса от сервера к пользователю приходит только HTML, а РНР выполняется на стороне сервера и отправлояет сгенерированный HTML! Всего кода, что мы пишем на РНР - в браузере клиента его нет.
 * РНР - это серверный язык программирования, потому что он выполняется на сервере, где лежит сайт.
 */
2-2
/*
 *Чтобы положить информацию в файл пишем:*/
file_put_contents('1.txt', $text);
/*
 * достаем информацию из файла так:*/
$text = file_get_contents(filename:'1.txt');
echo $text;
/*Но можно еще сократить вывод, одной строчкой:*/
echo file_get_contents('1.txt');

2-3
/*
 *Если два раза написать переменную, но каждый раз с разными значениями, то на экран пользователя выведется последння */
 	$text = 'Hello World';
	$text='Zimbabve'; /*заменит значение переменной*/
/*Но если перед равно поставить точку в последней пееременной, то выведутся оба текста вместе, например:*/
 	$text = 'Hello World';
	$text.=' Zimbabve'; /*объединяется*/
/*Следующий вариант - треться строчка затрет две предыдущие*/
 	$text = 'Hello World';
	$text.=' Zimbabve';
	$text='Vasyan'; /* выведется на экран только новое значение переменной -  Vasyan*/

2-4
/*Если у нас в HTML встречаются несколько переменных с одинаковым названием, то можно использовуать константы, напрмер*/
$text = 'Вступительный урок'; /*эта запись не нужна теперь - для ознаколмления написана*/
define('TEXT', 'Вступительный урок') /*define - константа, ТЕХТ большими буквами*/
/* <h1><?=TEXT; ?></h1>
 * помещаем константу в HTML
 * Константой мы утверждаем настройки, котрые не будем менять в коде.
 */

2-5
/*Типы переменных*/
$text = 'Произвольный текст'; // string - строка, текст
$num = 10; // int, integer - целые числа
$float = 1.2; //float - дробные, с плавающей запятой
$bool = true; // bool, boolean (true или false)

$result = $text + $num; /*выдаст ошибку, так как разные типы переменнхы складывать нельзя!*/
echo $result;
$result = $text.$num.$float /* не выдаст ошибку, так как с точкой не складывает, а склеивает все подряд в одно слово*/
echo $result; //Произвольный текст101.2
$result = $text.' '.$num.' '.$float // тоже не выдаст ошибку + поставит между значениями переменных пробелы
echo $result; //Произвольный текст 10 1.2

/*Пример:*/
$num1 = 10;
$num2 = 15;
$calc_result = $num1 + $num2; // или $calcResult - тоже самое "Верблюжий стиль"
var_dump($calc_result); //вывод на экран результатов - int(25)

$calc_result = $num1 / $num2; // тоже , только с делением
var_dump($calc_result); // float(0.6666666666666666) -число с плавающей запятой

//Приведение к типам - пример:
$num1 = (string) $num1; // вместо числа задаем новую переменную - строка
var_dump($num1); // получим string(2) "10" - число превратили в текст, в скобках указано количество знаков, байт

$num1 = (bool) $num1; // еще вариант
var_dump($num1); // bool(true) - правда все кроме нуля, даже с минусом правда (true)

/*
 * Допускаются следующие приведения типов:
(int), (integer) - приведение к int - целые числа
(bool), (boolean) - приведение к bool - логический
(float), (double), (real) - приведение к float - дробные числа
(string) - приведение к string - строка
(array) - приведение к array - множество, массив
(object) - приведение к object - объект
(unset) - приведение к NULL  — удаляет переменную
 */


// PHP с нуля - 3 урок - Управляющие конструкции и операторы сравнения
// Урок 3: Управляющие конструкции и операторы сравнения

3-1
/*
 * условия:
 * == равенство по значению - не путайте = и == в коде! В операторах сравнения не существует одного равно, это обычное присвоение переменной значения. А значение присваивается ВСЕГДА. И это распространённая ошибка, новички путают = и ==.
 * === равенство по значению и ТИПУ
 * != не равно
 * !== не равенство по значению или типу
 * < меньше
 * > больше
 * <= меньше или равно
 * >= больше или равно
 */
// Управляющие конструкции - if, elseif, else
//Расмотрим на примере корзины добавления товара в интернет магазине: первый вариант:
$cart_count = 0;
if ($cart_count >0) { // если больше нуля
	echo 'В корзине '.$cart_count.' товаров';
	}
else { //если нет
	echo 'Нет товаров в корзине';
}

//второй вариант - меняем местами строчки:
$cart_count = '3';
if ($cart_count ==0) { // если да?
	echo 'Нет товаров в корзине';
}
else { //если нет
	echo 'В корзине '.$cart_count.' товаров';
}
 //третий вариант - с текстом:
$cart_count = 'Пиво';
if ($cart_count == 0) { // строка при переводе в число - превращается в ноль,
	// как вариант можно записать так: if ((int)$cart_count == 0)
	//ответ при == будет да, если  === то нет
	echo 'Да';
}
else { //если нет
	echo 'Нет';
}

// для уменьшения кода можно писать иногда без else :
$is_buy = 1;
if ($is_buy === (3-2)) // можно так же записать в виде:
	//if (true)
	echo 'Yes'

3-2
//Разбор вариантов с окончанием слов в корзине
//0 рублей
//1 рубль
//2 рубля
//первый вариант:
$rub = 2;
if ($rub === 0) {
	echo $rub.' рублей';
} else {
	if ($rub === 1) {
		echo $rub.' рубль';
	} else {
		echo $rub.' рубля';
	}
}
//второй вариант - с использованием elseif:
$rub = 3;
if ($rub === 0) {
	echo $rub.' рублей';
} elseif ($rub === 1) {
	echo $rub.' рубль';
} elseif ($rub === 2) {
	echo $rub.' рубля';
} else {
	echo $rub. ' рубл...';
}
/*
 * в этих схемах if - обазательно
 * elseif и else - не обязательно
 */

3-3
//Сравнение цифровых значений:
$num1 = 10;
$num2 = 5;
if($num1 != $num2) {
	echo 'не равно';
}

3-4
// Правило №4: работаем переменными из-вне только тогда, когда они существуют.

3-5 // isset — Определяет, была ли установлена переменная значением, отличным от null
//Определяет, была ли установлена переменная значением отличным от null.
//Если переменная была удалена с помощью unset(), то она больше не считается установленной.
$x = 1;
$y = 2;

if (isset($z)) { //переменная isset проверяет есть ли переменная и только если она есть, то выполняется этот блок
	echo 'Переменная существует';
} else {
	echo 'Переменная не существует';
}

3-6 //Работаем с формой в PHP:
// разберем на примере авторизации на сайте (html код закоментим, чтобы не мешал, но на странице сайта он должен быть не закоментен):
/*<form action="" method="post" class="content">
*	<input name="login" placeholder="Введите логин"><br>
*	<input name="password" placeholder="Введите пароль"><br>
*	<input type="submit" value="Отправить">
*</form>*/

//$_POST['login'];
//$_POST[['password'];
if(isset($_POST['login'], $_POST['password'])) {
	echo 'Форма была отправлена<br>';
}
//первый вариант:
if ($_POST['login'] == 'inpost') { // логин мы задаем заранее
	if($_POST['password'] == '123') { // пароль мы задаем заранее
		echo 'Вы ввели логин и пароль правильно, вы авторизированы<br>';
	}
}
//второй вариант - сокращаем два условия через && - обозначает "и":
if ($_POST['login'] == 'inpost' && $_POST['password'] == '123') {
	echo 'Вы ввели логин и пароль правильно<br>';
}

//третий вариант через || - обозначает "или":
if ($_POST['login'] == 'inpost' || $_POST['password'] == '123') {
	echo 'Вы ввели логин или пароль правильно<br>';
}

// четвертый вариант, когда достпен 1 вариант логина и два варианта пароля "123" или "234":
if ($_POST['login'] == 'inpost' && ($_POST['password'] == '123' || $_POST['password'] == '234')) {
	echo 'Вы ввели логин и пароль правильно<br>';
}
/* Эти блоки потом можно вставить в шапку сайта перед <a><Авторизация/a> и заменить на приветствие "Здравствуйте inpost"
 * Если логин и пароль верны, то пользователя по привествует, если нет, то перейдет к ссылке/кнопке "Авторизация"
 */

3-7
// Правило №5 Мы не используем exit на сайте, кроме как ОТЛАДКА КОДА;

3-8
//Функция empty -
$x = 1; //0 или пустая строчка - это false, 1, любой текст и далее true
if(empty($x)) {
	echo 'Переменная НЕ СУЩЕСТВУЕТ или она ПУСТАЯ';
}
if(!empty($x)) { // ! перед функцией означает, что будет выпоняться обратная функция
	echo 'Переменная и существует и она НЕ пустая';
}

3-9
//PHP supports the following data types: / PHP поддерживает следующие типы данных:
//String - строка
//Integer - Целое число
//Float (floating point numbers - also called double) - числа с плавающей запятой, также называемые двойными
//Boolean - логический
//Array - Множество / массивы
//Object - Объект
//NULL - нулевой
//Resource - ресурс

/*
 * Строка — это последовательность символов, например «Hello world!».
Строка может быть любым текстом в кавычках. Вы можете использовать одинарные или двойные кавычки
 */

/*
 * Целочисленный тип данных — это недесятичное число от -2 147 483 648 до 2 147 483 647.
Правила для целых чисел:
Целое число должно иметь хотя бы одну цифру
Целое число не должно иметь десятичной точки
Целое число может быть как положительным, так и отрицательным
Целые числа могут быть указаны в: десятичной (по основанию 10), шестнадцатеричной (по основанию 16), восьмеричной (по основанию 8) или двоичной (по основанию 2) нотации.
 */

/*
 * Float - Поплавок (число с плавающей запятой) — это число с десятичной точкой или число в экспоненциальной форме.
 */

/*
 * Булево значение PHP
Логическое значение представляет два возможных состояния: TRUE или FALSE. Логические значения часто используются в условном тестировании.
 */
/*
 * PHP-массив
Массив хранит несколько значений в одной переменной.
 */

/*
 * PHP-объект
Классы и объекты — два основных аспекта объектно-ориентированного программирования.
Класс — это шаблон для объектов, а объект — это экземпляр класса.
Когда создаются отдельные объекты, они наследуют все свойства и поведение класса, но каждый объект будет иметь разные значения свойств.
Предположим, у нас есть класс Car. Автомобиль может иметь такие свойства, как модель, цвет и т. д. Мы можем определить такие переменные, как $model, $color и т. д., чтобы хранить значения этих свойств.
При создании отдельных объектов (Volvo, BMW, Toyota и т. д.) они наследуют все свойства и поведение класса, но каждый объект будет иметь разные значения свойств.
Если вы создадите функцию __construct(), PHP будет автоматически вызывать эту функцию при создании объекта из класса.
 */

/*
 * НУЛЕВОЕ значение PHP
Null — это особый тип данных, который может иметь только одно значение: NULL.
Переменная типа данных NULL — это переменная, которой не присвоено значение.
Совет: Если переменная создается без значения, ей автоматически присваивается значение NULL.
Переменные также можно очистить, установив значение NULL
 */

//Урок 4: Массивы
/*План:
*Массивы
*Элементы массива
*CRUD массивов и элементов массива
 *
 * Словарь:
 * Массивы (array) - тип данных, позволяющий группировать переменные.
 * Элемент массива (element) - одна переменная в массиве
 * Ключ (key) - имя элемента массива (имя переменной, по аналогии)
 * Индексный ключ (index) - порядковый номер (int)
 * Ассоциативный ключ (assoc) - текстовое имя (string)
 * Значение (value) - содержание элемента массива
 */

4-1
//МАССИВ
//СОСТАВ МАССИВА: КЛЮЧ => ЗНАЧЕНИЕ, (при этом ЗНАЧЕНИЕ обязательно, а КЛЮЧ НЕТ)
// переменная => значение
//разберем на примере массива - оценки учеников:
{
	$vasya = 5; //ключ = значение (key = value)
	$petya = 4;
	$nastya = 2;
}
// каждая переменная (ключ) в массиве называется: элемент массива
//пишем этот же пример на php:
$users = [
	'vasya' => 5, //переменные выделяем '_' вместо $,так же используем запятую в конце строки, вместо точки с запятой
	'petya' => 4,
	'nastya' => 2,
];
echo '<pre>'; //задаем для красивого вывода - в столбик
//var_dump($users); - выводим данные на экран раньше мы так учили, но это функция отладки, пока отключим
// для вывода на экран лучше использовать print_r
print_r($users); // так и вид лучше

//массив в массиве пример:
$elements = [
	'russia' => [
		'Saint peterbuerg',
		'Moscow',
	],
	'Ukraine' => [
		'Kiev',
		'Sumy',
		'Hlukhiv',
	]
];
echo '<pre>'; // это сейчас пишем, чтобы посмотреть как будет выглядеть при разработке
print_r($elements); //а в реальном коде уже не используем

4-2 //Как дополнить массив?
$country = [
	'Russia',
	'Ukraine',
];
$country[] = 'Israel'; // вот так дополняем массив
// еще пример - наш массив с оценками в школе:
$users = [
	'vasya' => 5,
	'petya' => 4,
	'nastya' => 2,
];
// 1) можем добавить ученика:
$users ['dima'] = 4;
print_r($users); // на экране мы уже увидим [dima] => 4 внутри массива с остальными.
// 2) можем перезаписать данные:
$users ['nastya'] = 3; // Так как 'nastya' уже есть в массиве, то 2 перезапишется на 3
// 3) можем всем поднять на один бал оценки:
++$users['nastya']; // так только Насте
// чтобы поднять всем оценки - нужно использовать циклы (будем изучать в следующем уроке)

//Числовой массив [не задается] называется - индексный.
//А когда ключ имеет [имя] - ассоциативный.

4-3 //чтобы удалить переменную используется следеющая команда (пишется после массива):
unset($elements);

//чтобы удалить определенную строчку с массива пишем:
unset($users ['vasya']); // удаляем имя 'vasya' из массива
unset($country [1]); // или порядковый номер записи (отсчет начинается с нуля)

4-4 // вывод переменной:
echo ($users ['petya'] * $users ['nastya']); // Петя 4 * Настя  2 получим вывод на экран "10"

//вывод из вложенных массивов:
echo $elements ['russia'][1]; //выведется 'Moscow'

// еще один вариант через временный файл?
$tmp = 'russia';
echo $elements [$tmp][1];

4-5 // implode — Объединение массивов в строку:
$country = [
	'Russia',
	'Ukraine',
	'Israel',
];
$countries = implode (  ', ', $country); //implode — Объединяет элементы массива в строку
/*добавляем в html полученную переменную:
* <p> Мы работаем со странами: <?=$countries;?>.</p>
* на экран выдаст текст "Мы работаем со странами: Russia, Ukraine, Israel."*/


4-6 // explode — Разбивает строку с помощью разделителя:
$tags = 'php mysql array variable';
$tags_array = explode(' ', $tags); //преобразовываем набор слов в массив
echo '<pre>';
print_r($tags_array); // выдает на экран массивом эти данные
?>




