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


2-2 // Чтобы положить информацию в файл пишем:
file_put_contents('1.txt', $text);
// достаем информацию из файла так:
$text = file_get_contents(filename:'1.txt');
echo $text;
//Но можно еще сократить вывод, одной строчкой:
echo file_get_contents('1.txt');


2-3 //Если два раза написать переменную, но каждый раз с разными значениями, то на экран пользователя выведется последння
 	$text = 'Hello World';
	$text ='Zimbabve'; //заменит значение переменной
//Но если перед знак присвоения поставить точку в последней пееременной, то выведутся оба текста вместе, например:
 	$text = 'Hello World';
	$text.=' Zimbabve'; //объединяется

//Следующий вариант - треться строчка затрет две предыдущие:
 	$text = 'Hello World';
	$text.=' Zimbabve';
	$text='Vasyan'; // выведется на экран только новое значение переменной - Vasyan

2-4 //Если у нас в HTML встречаются несколько переменных с одинаковым названием, то можно использовуать константы, например
$text = 'Вступительный урок'; /*эта запись не нужна теперь - для ознаколмления написана*/
define('TEXT', 'Вступительный урок') /*define - константа, ТЕХТ большими буквами*/
/* <h1><?=TEXT; ?></h1>
 * помещаем константу в HTML
 * Константой мы утверждаем настройки, котрые не будем менять в коде.
 */

2-5 // Типы переменных:
$text = 'Произвольный текст'; // string - строка, текст
$num = 10; // int, integer - целые числа
$float = 1.2; //float - дробные, с плавающей запятой
$bool = true; // bool, boolean (true или false)

$result = $text + $num; //выдаст ошибку, так как разные типы переменных складывать нельзя!
echo $result;
$result = $text.$num.$float //не выдаст ошибку, так как с точкой не складывает, а склеивает все подряд в одно слово
echo $result; //Произвольный текст101.2
$result = $text.' '.$num.' '.$float // тоже не выдаст ошибку + поставит между значениями переменных пробелы
echo $result; //Произвольный текст 10 1.2

//Пример:
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
// Управляющие конструкции - if, elseif, else. Своимм словами:
// if (или так), elseif (или тоже так, но с другми условиями), else (или по другому совсем)
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
	echo 'Yes';

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
//второй вариант - с использованием elseif - пишем когда нужен дополнительный вариант условия if:
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

//Разберем на примере авторизации на сайте:
$login = 'inpost';
$pass = 'test';
if($login == 'inpost') {
	echo 'Логин совпал'; //условие верно
	} elseif($pass == 'test') {
	echo 'пароль совпал'; // условие верно
} else {
	echo 'Ни логин ни пароль не совпали'; // условие не верно
}

//второй вариант: тоже только на оборот, со знаком не равенства:
$login = 'inpost';
$pass = 'test';
if($login != 'inpost') {
	echo 'Логин не совпал'; //условие не верно
} elseif($pass != 'test') {
	echo 'пароль не совпал'; // условие не верно
} else {
	echo 'Логин и пароль совпали'; // условие не верно
}
// третий вариант:
$login = 'inpost';
$pass = 'test';
if($login == 'inpost') {
	if($pass == 'test') {
		echo 'Вы авторизированы';
	}
	else {
		echo 'Пароль введен не верно';
	}
} else {
	echo 'Логин введен не верно';
}

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


// 10-й урок Урок 10: Практикуемся с версткой

10-1
// новая функция: switch
/*
 * Оператор switch похож на ряд операторов IF с одинаковым условием. Во многих случаях вам может понадобиться сравнивать
* одну и ту же переменную (или выражение) с множеством различных значений и выполнять различные участки кода в
* зависимости от того, какое значение принимает эта переменная (или выражение). Это именно тот случай, для которого
* удобен оператор switch.
 */
switch($page) {
	case 'main': //условия
		//сюда прописываем действия (echo или любое другое)
		break;
	case 'payment': //условия
		break; //действия
	default: // - пишем, если ниодно действие не совпало
		$page = 'main';
}
//сокращенный вариант:
switch($page) {
	case 'main': case 'payment': //условия
		//сюда прописываем действия (echo или любое другое)
		break;
	default: // - пишем, если ниодно действие не совпало
		$page = 'main';
}

// пишем такую же конструкцию через if:
if($page == 'main') {
	//действия
} elseif($page == 'payment') {
	//действия
} else { // - пишем, если ниодно действие не совпало
	$page = 'main';
}
// эту конструкцию тоже можем сократить:
if($page == 'main' || $page == 'payment') {
	//действия
} else { // - пишем, если ниодно действие не совпало
	$page = 'main';
}
// расшифровка: если переменная $page не является 'main' или 'payment', то мы ее сделаем 'main'

10-2
// include - эта функция включает и выполняет указанный файл (указывает какой файл нужно запустить и какие
// переменные оттуда вытянуть или может все содержимое страницы подгрузить с того файла в наш)
vars.php // отсюда берем информацию
<?php
$color = 'зелёное';
$fruit = 'яблоко';
?>

test.php
<?php
echo "Одно $color $fruit"; // Одно
include 'vars.php'; // сюда подключаем
echo "Одно $color $fruit"; // Одно зелёное яблоко
?>

<?php
// 11-й урок
11-1 // Массивы
$country = array();
$country [] = 'Chaos name 1';
$country [] = 'Chaos name 2';
$country [] = 'Chaos name 3';
$country [] = 'Chaos name 4';

echo '<pre>'.print_r($country,2).'</pre>'; // вывод на экран
unset($country[2]); // удаляем из массива 2 строчку
// (отсчет идет с 0, поэтому реально это 3-я строчка 'Chaos name 3)
echo '<pre>'.print_r($country,2).'</pre>'; // вывод на экран, предыдущая информация не стирается
$country [] = 'Chaos name 5'; // добавляем новую строчку
echo '<pre>'.print_r($country,2).'</pre>'; // вывод на экран, предыдущая информация не стирается
// как видим новая строчка не заняла место 2-й удаленной, а стала 4-й. Каждая новая, не учитывает удаленные,
// а присваивает номера дальше

//Вывод из массива данных на экран:
$var = 'Произвольный текст';
$array = array (
	'key'=>'value',
	'key2'=>'value2',
	'key3'=>'value3',
	'names'=>array('Вася', 'Петя', 'Илона', 'Даша'),
);
echo '<pre>'.print_r($array,1).'</pre>'; // это команда для просмотра структуры массива
echo $array['names'][1]; // На экран вывелся 'Петя'
//кроме print_r есть еще одна функция: var_damp - она отличается от предыдущей тем, что указывает
// дополнительно типы данных и (длину строки) - более профессиональный, но менее удобный.
echo '<pre>';
var_dump($array);
echo '</pre>';

11-2 /* Циклы
 1. while
 3. do-while
 3. for
 4. foreach (для массивов)
 */

11-2-1 // while
//принцип написания похож на if
//Если нужно производить выполнение операторов цикла в PHP скрипте только при выполнении определённого
// условия, то в PHP используется цикл while
//Синтаксис цикла while в PHP
while(условие)
{
	Операторы цикла через ;
     }
//  "=" - это не равно, а базовый оператор присвоения, устанавливает значение
//"==" - это уже равно, "===" - тождественно равно (переменные равны и имеют тот же тип)
$x = 1;
echo $x.'Текст до цикла<br>'; // выведется: '1Текст до цикла'
while($x == 1 || $x == 2 || $x == 3) {
	echo 'Произвольный текст';
	$x = $x + 1; // увеличиваем переменную на 1 вплоть до 4
	//можно так же сократить это же выражение:
	// ++$x;
	echo $x.'<br>'; // выведется: 'Произвольный текст2', и так далее до 'Произвольный текст4'
}
echo 'Текст после цикла'.$x; // выведется последняя строчка: Текст после цикла4

//Операторы инкремента и декремента
//++$a	Префиксный инкремент	Увеличивает $a на единицу, затем возвращает значение $a.
//$a++	Постфиксный инкремент	Возвращает значение $a, затем увеличивает $a на единицу.
//--$a	Префиксный декремент	Уменьшает $a на единицу, затем возвращает значение $a.
//$a--	Постфиксный декремент	Возвращает значение $a, затем уменьшает $a на единицу.


//второй вариант:
$x = 1;
echo 'Текст до цикла<br>';
while($x < 10) {
	echo $x.'Произвольный текст<br>'; // выведется 9 раз
	++$x;
} echo 'Текст после цикла'.$x;

// тот же второй вариант, только уже в html в виде таблицы:
$x = 1;
echo '<table border=1"><br>';
while($x < 10) {
	echo '<td>';
	echo $x.') Произвольный текст<br>'; // выведется 9 раз
	++$x;
} echo '</td>';


//Использование цикла while более корректно для поиска корней уравнения, потому что мы изначально не знаем, в каком диапазоне находится корень,  а использование цикла for предполагает, что мы это знаем.
//Пример скрипта на PHP с использованием цикла while. Скрипт ищет решение уравнения x²-20x+100=0
    $y = 100;
    $i = 0;
    while($y != 0) {
		$i = $i + 1;
		$y = $i * $i - 20 * $i + 100;
	}
   echo "Решение уравнения {$i}"; //Решение уравнения 10

// Рассмотрим дальше на примере одной и той же таблицы, на html и с помощью циклов:
/* тут два ряда в таблице, в каждом из которых 3 ячейки
 	<table border="1" cellpadding="5">
		<tr>
			<td>1:1</td>
			<td>1:2</td>
			<td>1:3</td>
		</tr>
		<tr>
			<td>2:1</td>
			<td>2:2</td>
			<td>2:3</td>
		</tr>
	</table>
 */

// второй вариант той же таблицы:
$i = 1; // указывает с какого числа начинается отсчет
echo '
	<table border="1" cellpadding="5">
	<tr>';
while($i <= 3) { // повторяем ячейки 3 раза
	echo '<td>1:'.$i.'</td>'; // содержимое ячейки
	++$i; // увеличение переменной i на единицу
}
	echo '</tr>
		<tr>
			<td>2:1</td>
			<td>2:2</td>
			<td>2:3</td>
		</tr>
	</table>';

//третий вариант - мы так же можем использовать циклы в циклах:
// тут выводим на экран счет от 1 до 9 три раза с указанием порядкового номера цикла:
$i = 1; //начальные условия
$x = 1; //начальные условия
while($i <=3) { // количество циклов
	while($x < 10) { // цикл вывода цифр от 1 до 9
		echo $x; // вывод на экран цифры
		++$x; // следующее добавление +1 вплоть до 9
	}
	echo $i;
	++$i; // после прохождения цикла повышает $i на единицу: $i = 2
	$x = 1; // а $x сбрасывается до единицы: $x = 1, после чего цикл повторяется
	// пока не получим $i = 3, после чего цикл дойдет до конца и завершится
}
// вот что в итоге выведется на экран: 123456789112345678921234567893 (где 1,2,3 после 1-9 это $i)

//Пример ошибочного цикла:
$x = 10;
while($x < 10) {
	echo $x;
} // тут по результату ничего не ведет на экран, так как $x = 10 и не может быть < 10

11-2-2 // DO WHILE - аналогична while, только отличие, что в начале у нас в обязательном
// порядке первая интерация цикла, то есть первый вывод будет работать.
echo 'Перед циклом<br>';
$x = 1;
do { // do - что делать?
	echo $x.'<br>'; // выводится
	++$x;
} while ($x < 10); // обратить внимание мы местами поменяли действия с условием
echo 'После цикла';
//мы тут делаем определенное действие, пока выполняется условие
//первая проверка цикла проходит теперь не в начале цикла, как было при while,
//а после первого выполнения, то есть первая часть do выполнится всегда, даже если условие
// не удовлетворяет
1:23:40 / 1:57:27

11-2-3 //FOR
echo 'Перед циклом';
for($x = 1; $x <10; ++$x) {
	echo $x.'<br>';
}
echo 'После цикла';

// цикл в цикле
echo 'Перед циклом'; // приблизительно так нужно будет сделать домашку.
for($x = 1; $x <= 5; ++$x) {
	for($y = 1; $y <= 10; ++$y) {
		echo $x.':'.$y.'<br>';
	}
}
echo 'После цикла';

11-2-4 //FOREACH - используется для перебора массивов
$names = array('', 'Вася', 'Петя', 'Илона', 'Даша'); // наш исходный массив
echo '<pre>'.print_r($names,1).'</pre>'; // просмотр исходного массива, в коде не нужно писать - это для себя
//$k - ключ (сокращение от key), $v - значение переменной (сокращенное от value)
echo 'В нашем доме живут: <br>';
foreach($names as $k=>$v) {
	echo 'Квартира = '.$k.', Владелец = '.$v.'<br>';
}

//второй вариант (массив тот же):
echo 'В нашем доме живут: <br>';
foreach($names as $k=>$v) {
	echo $v.', '; // получили вывод всех имен в виде:"В нашем доме живут: , Вася, Петя, Илона, Даша,"
}
echo '</br>';

//третий вариант (меняем только способ вывода, но резельтат будет как в варианте два):
echo 'В нашем доме живут: <br>';
foreach($names as $k=>$v) {
	echo $names[$k].', '; // получили вывод всех имен в виде:"В нашем доме живут: , Вася, Петя, Илона, Даша,"
}
echo '</br>';

//Четвертый вариант - самый короткий без создания ключей (результат аналогичный второму):
echo 'В нашем доме живут: <br>';
foreach($names as $v) { // ключ в этом способе не создаем, только значение передаем, зато быстрее так обрабатывается
	echo $v.', '; // получили вывод всех имен в виде:"В нашем доме живут: , Вася, Петя, Илона, Даша,"
}
echo '</br>';

//Пятый вариант - перебор массива (ключ и значение задаем прямо в массиве):
$names = array('Name1'=>'Вася', 'Name2'=>'Петя', 'Name3'=>'Илона', 'Name4'=>'Даша'); // Name - ключ, Вася - значение
echo '<pre>'.print_r($names,1).'</pre>'; // просмотр исходного массива, в коде не нужно писать - это для себя
//$k - ключ, $v - значение переменной
echo 'В нашем доме живут: <br>';
foreach($names as $k=>$v) {
	echo $k.'=  '.$v.'</br>';
} //получим:
//В нашем доме живут:
//Name1= Вася
//Name2= Петя
//Name3= Илона
//Name4= Даша

11-2-4 // У всех четырех циклов есть специальные функции: break и continue;
// break - обрывает цикл;
$names = array('Вася', 'Петя', 'Илона', 'Даша');
echo '<pre>'.print_r($names,1).'</pre>';
foreach($names as $k=>$v) {
	if ($v == 'Илона') { // если цикл дошел в массиве до "Илона", то
		break; // то цикл останавливается
	} echo $v.', '; // на экран выведется только "Вася, Петя,"
}

// continue - заканчивает данную итерацию цикла;
$names = array('Вася', 'Петя', 'Илона', 'Даша');
echo '<pre>'.print_r($names,1).'</pre>';
foreach($names as $k=>$v) {
	if ($v == 'Илона') { // если цикл дошел в массиве до "Илона", то
		continue; // то цикл оборвется и "Илона" не выведется
	} echo $v.', '; // на экран выведется только "Вася, Петя, Даша,"
}

// Урок 12: Домен и хостинг
//Хостинг
//Домен
//DNS
//Сайт hostinger.ru
//FTP-клиент Far
//FTP-клиент FileZilla
//Настройки сервера: phpinfo() - функция для просмотра версии php, программ, IP и прочего на сервере.
// Через этот сайт можно получить уязвимости сайта, поэтому после проверки удаляем со страницы


//Урок 13: Пользовательские функции
13-1 //Считаем количество элементов в массиве:
// допустим нам в одном коде нужно посчитать количество жильцов и стран в массивах, похожие действия
$array = array(
	'Петя', 'Ульяна', 'Даша', 'Маша', 'Денис',
);
$count = 0; // создание переменной, откуда начинается счетчик
//Подсчеты - счетчик жильцов
foreach($array as $v) {
	++$count;
}
//вывод
echo 'В нашем доме живут ('.$count.') ';
foreach($array as $v) { //вывод массива на экран + добавление счетчика жльцов
	echo $v.', ';
} // получим на экране: "В нашем доме живут (5) Петя, Ульяна, Даша, Маша, Денис,"

//считаем количество стран в массиве:
$country = array(
	'Украина', 'Польша', 'Франция',
);
$count = 0;
foreach($country as $v) {
	++$count;
} echo 'Стран в массиве= ('.$count.') ';

/* Бывают коды очень большой длинны 1000+ строк и в нем может быть некоторый участок кода,
 * который будет повторяться в некоторых местах как в примере выше - подсчет жильцов и стран
 * в этом случае на помощь приходит функция. Они аналогичны с изученными инклюдами:
 * include 'text.php' - подставляем участок кода в определенный файл
 */
//Функция count:
$count = count ($array);
$count = count ($country);

//Еще одна особенность - нам не обязательно результат помещать в какую-то переменную, мы можем вызвать
//функцию прямо внутри кода:
$array = array(
	'Петя', 'Ульяна', 'Даша', 'Маша', 'Денис', 'Степан',
);
echo 'В нашем доме живут ('.count($array).'):';
foreach($array as $v) {
	echo $v.', ';
} // получим вывод: "В нашем доме живут (6):Петя, Ульяна, Даша, Маша, Денис, Степан,"


13-2 //Вызов (запуск) функции:
//Запомнить: страница php - это программа, а функция - это подпрограмма
//func (); - у разных функций свои названия
//Создание функции:
function count2 () { // называем count2, так как count уже было, а повторять нельзя
	// тут пишем тот код, который должна выполнять функция
	echo 'Произвольный текст из функции<br>';
} //дальше мы эту функцию вызываем:
echo 'Текст до функции<br>';
count2(); // подставится "Произвольный текст из функции"
count2(); // подставится "Произвольный текст из функции"
count2(); // подставится "Произвольный текст из функции"
echo 'Текст после функции';

/* у функции есть некоторые особености - переменные, котрые мы создаем за пределами функции - не существует внутрии функции
 * если перед function count2 строчкой выше прописать $var1 = 'text'; то эта переменная никак не повлияет на функцию.
 * с другой стороны если переменную новую разместить внутри функции, то она не будет выполняться вне функции
 * разберем на примере предыдущей функции:
 */
$var1 = 'text1';
function count2 () {
	//echo $var1; //ошибка
	$var2 = 'text2 ';
	echo $var2;
	echo 'Произвольный текст из функции<br>';
}
//echo $var2; //ошибка
echo 'Текст до функции<br>';
count2(); // подставится "text2 Произвольный текст из функции"
count2(); //
count2(); //
echo 'Текст после функции';
/*
 * Фцнкции полностью независимы. Хоть они и находятся в одном месте, все ранов они друг друга не видят.
 * Функция должна быть независимой и всегда работать так как надо. Переменные с однаковым названием (если так получилось)
 * выполняются отдельно и не зависят друг от друга. Переменные внутри функции не видны за пределами функции. И те
 * что за пределами функции не видны внутри функции.
 */


13-3 //как передать переменную из-вне функции внутрь функции? Рассмотрим на примере $var1, для этого размещаем ее
// внутри круглых скобок (в коментах очередность действий выполнения):
$var1 = 'Степан'; // 1-е  - задаем переменную
function count2 ($t1, $t2, $t3) { // 3-е отправляем на выполнение функции уже не $var1, а значение переменной $t1
	echo $t1.'<br>'.$t2.'<br>'.$t3.'<br>'; //4-е действие - выводим на экран
}
echo 'Текст до функции<br>';
count2($var1, 'Пантера', 2022, 2023); // 2-е переносим в этот код ($var1) кроме того прописываем новые, не извне
//count2(); // тут пришлось закоментить, потому что выдает ошибку
echo 'Текст после функции';
//2023 не выведется, так как в функции function count2 не введено переменную $t4 и в эхо ее тоже нет.
//если в функции убрать $t3 - выдаст ошибку, так как в функции передавать больше значений можно, меньше нельзя.


13-4  // разбираем что еще можно делать с функцией:
function hard ($num1, $num2) {
	$sum = ($num1*5+$num2*10)/2 - 1;
	$sum = 'Результаты подсчетов: '.$sum;
	echo $sum;
}
//затем в произвольном месте, не обязательно рядом, можно даже через 100-200 строк, потом вызываем нашу функцию:
hard(5,3);
// и смотрим результат: "Результаты подсчетов: 26.5" - расчет произведен.


13-5 // Улучшаем эту же функцию добавбляя новые условия выполнения через IF и ELSE:
function hard ($num1, $num2) {
	$sum = ($num1*5+$num2*10)/2 - 1;
	if ($sum <20) {
		$sum = 'Результаты подсчетов: '.$sum;
		echo $sum;
	} else {
		echo 'Слишком большое число у переменной (результат больше 20)';
	}
}
hard(1,3);
echo '<br>';
hard(30,40);


13-6 //О выводе на экран:
/*
 * Принято так, что функция не должна содержать вывод на экран, то есть echo не должно быть в функциях
 * Функции должны получать какие-то данные и возвращать какие-то данные. А заходим ли мы вывести какие-то
 * данные на экран мы должны уже сами решать.
 * Теперь как это происходит - напишем эту же функцию, только без вывода информации на экран:
 */
function hard ($num1, $num2) {
	$sum = ($num1*6+$num2*10)/2 - 1;
	if ($sum <20) {
		$sum = 'Результаты подсчетов: '.$sum;
		return $sum; // меняем echo на return
	} else {
		return 'Слишком большое число у переменной (результат больше 20)'; // меняем echo на return
	}
}
$temp = hard(1,1); // Результаты подсчетов: 7
echo $temp;


13-7 // сами пишем функцию, которая должна считать:
$names = array(
	'Петя', 'Ульяна', 'Даша', 'Маша', 'Денис', 'Степан',
);
function count2 ($names) {
	$count = 0; // теперь мы должны переменную $count посчитать
	foreach($names as $v) { // между ")" и "{" нельзя ставить ";" - сейчас поставил и потом искал пол часа ошибку!
		++$count;
	}
	return $count; // 6
}
echo count2 ($names); //6


13-8 // Обычно это все выводится проще, благодаря встроенным функциям:
$names = array(
	'Петя', 'Ульяна', 'Даша', 'Маша', 'Денис', 'Степан',
);
$count = count ($names);
echo 'итого '.$count.' имён'; // echo "итого .$count. имён"  - так тоже можно писать
// "итого 6 имён"


13-9 // разберем более сложные функции на примере задания из домашки (создать таблицу и окрасить ячейки в разные цвета):
function makeTable ($x,$y) { //здесь можно проставить цифры, но все равно если мы внизц в "echo makeTable (5,3);"
	// зададим другие цифры, то приоритет к исполнению функции отдастся цифрам из "echo makeTable (5,3);"
	$text = '';
	$text .= '<table>';
	for($i=1; $i<=$y; ++$i) {
		$text .='<tr>';
		for($i2=1; $i2<=$x; ++$i2) {
			$color = 'white'; // цвет всех ячеек
			if($i == 2 && $i2 == 3) {
				$color = 'red'; // ячейка 2:3 будет красная
			} elseif ($i == 2 && $i2 == 4) {
				$color = 'green'; // ячейка 2:4 будет зеленая
			} elseif ($i == 3) {
				$color = 'blue'; // третья строка будет синяя
			}
			$text .= '<td style="background-color:'.$color.';">'.$i.':'.$i2.'</td>';
		}
		$text .='</tr>';
	}
	$text .= '</table>';
	return $text; // return работает по аналогии с break - завершает выполнение текущей функции
	//return может возвращать только одну переменную!!! Если записать две через запятую, то выдаст ошибку.
	// но есть лазейка - можно вернуть несколько - массивом.
}
echo makeTable (5,3); // задаем количество столбцов и строк


13-10// Функция count
//count — Подсчитывает количество элементов массива или Countable объекте
count(Countable|array $value, int $mode = COUNT_NORMAL): int
//Подсчитывает все элементы в массиве, если используется массив. Если используется объект, который реализует
//интерфейс Countable, функция возвращает результат выполнения метода Countable::count().


13-11 //Функция preg_match
//preg_match — Выполняет проверку на соответствие регулярному выражению
preg_match(
    string $pattern,
    string $subject,
    array &$matches = null,
    int $flags = 0,
    int $offset = 0
): int|false
// Ищет в заданном тексте subject совпадения с шаблоном pattern.

13-12 // Функция по регистрации пользователя и проверки условий (это не регистрация, а просто пример функции):
function addToDB ($login, $password) {
	// Процедура добавления пользователя в общую Базу Данных
}
function reg ($login, $password) {
	if ($login == 'Vasya') { // Если логин 'inpost' совпадет с логином в базе 'Vasya', то
		return false; //в регистрации отказано
	}
	addToDB ($login, $password);
		return true; // регистрация прошла, добавили в базу
}
if (reg('Vasya', '123')) {
	echo 'Вы успешно зарегистрировались, поздравляем!';
} else {
	echo 'Такой логин уже есть в базе данных, вы не зарегистрировались!';
}


13-13 //Функция по вызову текста:
function textMake ($text) {
	$text = 'Разные '.$text.' и буквы'; // эта строчка привязывает переменную извне функции к функции
	return $text;
}
$text = 'слова'; // этот блок с переменными можно разместить и перед функциями, разницы нет
$text = textMake($text); // вызов переменной тест - тут можно в левой части вместо $text можно заменить на другую переменную
echo $text; // вывод переменной текст на экран
// вывод на экран: "Разные слова и буквы"

//Предыдущую же функцию можно сократить благодаря значку и: "&" перед переменой в функции - "склеивание переменных":
function textMake (&$text) {
	$text = 'Разные '.$text.' и буквы'; // убрали "	return $text;"
}
$text = 'слова';
textMake($text); // убрали переменную в левой части строки
echo $text;

13-14 /* Домашнее задание:
 * Сделать калькулятор. 3 входящих параметра:
 1. Первое число, 2. Второе число, 3. Действие (плюс, минус, умножить, поделить).
 * По примеру: function calc($num1,$num2,$action)
  * 4. Если $action не задан, то по умолчанию должно складывать переменные.
 */

 14 // Урок 14: Методы передачи данных GET и POST, работа с формами

 14-1 /* Формы - это блочные элементы, наподобие div, внутри которіх содержатся формы. Форм может быть несколько
на странице (пример: поле авторизации и поле регистрации). Формы сами по себе независимые.
*Атрибуты, которые есть у нас в форме:
1) action - указание файла, для отработки, этот атрибут указывать нужно всегда. Этот фал создаем заранее. Если мы хотим сделать отправку и обработку страницы на одной странице, а это лучший вариант для одностраничного сайта, то нам достаточно поле названия файла оставить пустым:
<form action="">
2) method - метод отправки переменных $_POST или $_GET: method="post" или method="get".
 $_POST и $_GET - это суперглобальные переменные, которые приходят из формы. Данные переменные
 пишутся таким синтаксисом.
 GET и POST - это наши два массива. Изначально они созданы пустыми. Это тожде самое, что если бы мы писали
 $_GET = array(); - так создаются пустые массивы
 Если мы передаем данные методом GET и POST, то эти массивы наполняются.
3) intime -
	*/

	echo 'GET: <pre>'.print_r($_GET, 1).'</pre>';
	echo 'POST: <pre>'.print_r($_POST, 1).'</pre>';
	?>

<form action="" method="get">
	GET	<input type="text" name="login"> <!--слово GET перед input отображает название поля ввода-->
	<input type="text" name="password">
	<input type="submit" name="submit" value="submit">
</form>
<!--можно сделать вообще две формы для каждого массива отдельно:-->
<form action="" method="post">
	POST	<input type="text" name="login"> <!--слово POST перед input отображает название поля ввода-->
	<input type="text" name="password">
	<input type="submit" name="submit" value="submit">
</form>

<?php
/* после этого на экран выведется:
GET:
Array
(
    [login] => roman.nik
    [password] => 1321
    [submit] => submit
)
POST:
Array
(
    [login] => inpost
    [password] => 3231321
    [submit] => submit
)/
Напомню, что [login] и [password] - это ключ переменной, а inpost и 3231321 - это уже значение переменной
*/

14-2  // Разберем еще пример - авторизация на сайте:






?>







