Домашняя работа:
Создать 13 пользователей в таблице `users`. Составить группу запросов:
1. Добавить пользователя:
	1) Петрович
	2) Yamamoto, возраст 10 лет
	3) inpost, возраст 2 года, пароль 123, email inpost@list.ru
	4) Добавить 10 произвольных пользователей с разными данными в возрасте от 18 до 40 лет
2. Отредактировать пользователя:
	1) Yamamoto => возраст исправить на 9 лет
3. Удалить данные:
	1) Удалить Петровича
4. Выбрать данные:
	1) Выбрать всех пользователей в возрасте от 20 до 25 лет и отсортировать по позрасту DESC (в обратном порядке)
	2) Выбрать пользователя inpost
	3) Выбрать 4 пользователей.

Эту домашку сохранить в php файле в таком виде:
1.1 INSERT INTO ...
1.2 ....

<?php
1.1 INSERT INTO `users` (`id`, `login`, `password`, `email`, `age`)
VALUES (NULL, 'Петрович', '', '', '10');
1.2 INSERT INTO `users` (`id`, `login`, `password`, `email`, `age`)
VALUES (NULL, 'Yamamoto', '', '', '10');
1.3 INSERT INTO `users` (`id`, `login`, `password`, `email`, `age`)
VALUES (NULL, 'inpost', '123', 'inpost@list.ru', '2');
1.4 INSERT INTO `users` (`id`, `login`, `password`, `email`, `age`)
VALUES (NULL, 'Roma', 'rrrr', 'roma@gmail.com', '47');
2.1 UPDATE `users` SET `age` = '9' WHERE `users`.`id` = 3;
3.1 DELETE FROM `users` WHERE `users`.`id` = 5;
4.1 SELECT * FROM `users` WHERE `age` > 20 AND `age` < 25 ORDER BY `age` DESC;
4.2 SELECT * FROM `users` WHERE `login` = 'inpost';
4.3 SELECT * FROM `users`LIMIT 4;

Update: можно добавлять данные и без ``, добавляет и так. Проверено.
INSERT INTO users(login, password, email, age) VALUES ('Рома',1111,'roma@ukr.net', 47);
?>