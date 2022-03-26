<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- font-awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="styls/css.css">
	<title>Beckend - Git</title>
</head>

<body>
	<header>
		Шапка сайта
	</header>
	<footer>Подвал сайта</footer>
	<?php
	echo '<hr><hr><br><h2>Модуль №6: Контроль версий Git
</h2>' . "<br>";
	echo '<hr><hr><br><h3>Back - #6.1-6 - Введение в GIT
				</h3><hr><hr>' . "<br>";
	/*Введение:
Git - это система контроля версий, позволяющая объеденить работу группы сотрудников в одном месте. Своего рода облачное хранилище с списком изменений в проекте и автором изменений в проекте. В случаи ошибки в проекте Git позволяет вернуться к веркии в которой ошибки не было. 
ВНИМАНИЕ! Основной материал леции записан в презентации.
*/

	echo '<hr><hr><br><h3>Back - #6.2 - Установка и настройка
				</h3><hr><hr>' . "<br>";
	/*Введение:
После установки "git" первым делом нужно проверить корректность его версию и корректность установки через команду: "git -- version".
В ходе установки можно было выбрать рстандартный текстовый редактор. Можно было выбрать текущий редактор. 
	Для работы с git будем пользоваться терминалам VS code. 
		Создадим репозиторий проекта черезе команду "git init" (репозиторий будет считаться с крытой папкой).
		При создании репозитория в главной попке будет создана папка ".gin" (невидимая), в которой прописаны все настройки для работы git. Поэтому позже мы научимся скрывать ее, чтобы она не отправлялась на сервер.
	Выполним настройку аккаунта:
		Закрепление имени => Этой командой закрепляется имя на всех устройствах "git config --global user.name 'SANI4'".
		Закрепление почты => Этой командой закрепляется email на всех устройствах "git config --global email.name 'SANI4'".

*/


	echo '<hr><hr><br><h3>Back - #6.3 - Добавление файлов в локальное хранилище
</h3><hr><hr>' . "<br>";
	/*Введение:
	В этом уроке научимся добавлять файлы в репозиторий. 
		Команда загрузки файла: 'git add "имя файла"'. => "git add index.php"
			Где, 
			css/ - формат добавления папки, 
			.css - формат добавления файлов с расширением
			Для добавления файла в репозиторий мало одного одной загрузки - он должен быть еще "закомиченым"
		
		Команда проверки статуса файлов: 
			"git status"
			При выполнении команды выгрузится отчет о в том числе ождидаемых комита файлах. Добавленный файл им и является.
		Команда отмены статуса загрузки файлов:
			"git rm --cached <file>" => "git rm --cached index.php"
		Команда добавления всех файлов на загрузку:
			"git add ."
			ВАЖНО! Загруженные файлы и в последствии изменяемые - комитятся в том виде, в котором они загружались, а не находились в момент после редактирования.
				Загруженный и после измененный файл находится в статусе "modified:   index.php".  Для его загрузки с изменениями нужно загрузить снова.
				Загруженный файл находится в статусе:   "new file:   index.php". 
				Не загруженный файл находится в статусе: "помечен красным цветом при вызове  команды git status"
		Команда комита загруженных файлов: 
		"git komit" 


*/


	?>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>