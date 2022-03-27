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
	<footer>Модуль #6 - Git/footer>
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
		ВАЖНО! Текущего действующего пользователя и его email можно проверить теми же камандами, но без кавычек. Высметится действующие имя и почта. 

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
		Команда вычеркивания файла из загрузки:
			"git reset HEAD test.txt" => "test.txt" название файла 
				Команда комита загруженных файлов: 
		"git commit"
		К этой команде стоит еще прописать некоторые параметры, но отправим загруженные файлы в комит без прописи доп.параметров. 
			При отправки коммита откроется редактор "vim". 
			В нем нужно надрать команду  "Initial commit" (инициализировать комит).
			Эту команду можно либо прописать "от руки" либо убрать у строки, где эта коанда написана знак решетки "#" (решетка означает комменткрий). 
			После записи команды нужно в самом низу отчета прописать ":wq" и нажать enter. Это запустит коммит.
			После команда git status показывает, что нет файлов готовых к комиту. 
		
		ВАЖНО! Редактор "vim", (который всплывает после вызова команды комита) можно обойти. 
		ВАЖНО! Без указанных имени и email комит выполнить не удастся.
		Для этого нужно прописать команду комита, но немного измененную: 
		"git commit -m 'changed index.php'" => в комментарии "поменял файл index.php".
		Где, 
		-m это объявление комментария (message или сообщения), 
		а кавычки '' это содержимое комментария коммита. 
		Таким методом можно обойти vim редактора с дополнительным комментарием.
*/

		echo '<hr><hr><br><h3>Back - #6.4 - Игнорирование
</h3><hr><hr>' . "<br>";
		/*Введение: 
		Для того, чтобы обозначить игнорирование для отдельных файлов - нужно создать отдельный вайл с названием ".gitignore" в папке репозитория. 
		Внутри файлика будет указываться файлы, которые будет игнорироваться. 
			#игнорирование файла с названием
			readmy_test.txt
			#игнорирование папки и ее содержимого
			#/css
			#игнорирование ввсех файлов с расширением 
			#*.txt 
			#игнорирование всех файлов в папке 'primer' с расширением .txt 
			primer/*.txt 
			#Не игнорировать все папки внутри папки "primer", но игнорировать внутри этих папок  все файлы с расширением .txt 
			// primer/** /*.txt 
			Вычеркивание файла из списка загрузки
			git reset HEAD test.txt
		ВАЖНО! Папка, в которой нет файлов либо файлы игнорируются при загрузки на другой репозиторий. 
	*/

		echo '<hr><hr><br><h3>Back - #6.4 - Ветвления и слияние
	</h3><hr><hr>' . "<br>";
		/*Введение: 
			В ходе урока поговорим про ветки и их слияние. 
			Ветка это грубо говоря канал по которому разработчик передает информацию на репозиторий. Ветки нужны для разделения работы разработчиков. 
			
			ВЕТКИ
			Часто разработчик работает с двумя ветками: с основной веткой, через которою он передает свою часть работы на репозиторий и вторую на которой идет разработка и могут допускаться ошибки. 
			Вторрая ветка на которой идет разработка является ответлением от основной ветки, а не от репозетория как основная ветка. 
			По завершению  работы на ветке на которой допускались ошибки и основная ветка  - соединяются в одну.
			ВАЖНО! Ветка над которой шла разработка видна всем разработчикам проекта. 
			
			Ветки позволяют отделить основную часть коммитов от той части коммитов, которыми занимаемся мы лично.
			Если вспомнить отчеты коммитов предыдущего урока, то можно было заметить, куда щел каммит:
			"On branch main" - часть отчета коммита, где "main" это название основной ветки. Тоесть на эту ветку заливаюстя уже завершенная работа. 
			
			ОБЪЯВЛЕНИЕ ОТДЕЛЬНОЕ ВЕТКИ 
			Команда объявление ветки: 
				"git branch forum", где git branch - это объявление ветки, а forum - название ветки. 
				
			КОМАНДА ПЕРЕХОДА НА ВЕТКУ
				"git checkout forum", где get checkout - переключение на ветку, а forum - название ветки на которую идет переход. 
				При переходе на другую ветку в терминале будет отображено на какую ветку мы перешли "Switched to branch 'forum'"
				Уточнить ветку на которой мы сидим можно через команду "git status".
				При парописи команды "git status" - в отчете будет отображено, что мы находимся на ветки "forum", а не "main". 
				Создадим папку 'forum' и закомитим ее на ветку 'forum'. При возврате на основную ветку "main" эта папка пропадает. 
				
			ОБЪЕДИНЕНИЕ СОДЕРЖИМОГО ВЕТОК
				Для объединения веток в одну - нужно перейти в главную ветку.
				"git merge forum" - где git marge - объявление слияния, а forum - назвение ветки с которой будет проходить слияние. Слияние будет производиться с веткой на которой мы находимся. 
				После слияния папка forum появится на ветке main. 
				После слияния ветка forum будет существовать не ссылаться она будет на ветку main. 
				Если кто то из разработчиков решит нам помочь в коже, то ему достаточно тепеключиться на ветку forum.
			*/

		echo '<hr><hr><br><h3>Back - #6.4 - Ветвления и слияние
			</h3><hr><hr>' . "<br>";
				/*Введение:
				СОЗДАНИЕ РЕПОЗИТОРИЯ НА GitHabe
				Если прежде в хоже обучения работа производилась на локальном сервере и там происходил весь обмен файлов и папок, то сейчас наладим обмен с удаленным репозиторием на GitHab. Авторизуемся на нем. И создаем на нем репозиторий, на который и будем загружать данные с локального репозитория. 
				Для этого нужно указать владельца аккаунта и название проекта. 
				При создании предлогается создать файл README, выбрать статус между приватным или публичным, добавить файл .gitignor и лицензию на случай если проект считается комерческим. 

				ЭТАПЫ КОММИТА ЛОКАЛЬНОГО РЕПОЗИТОРИЯ НА УДАЛЕННЫЙ:
				Далее выдается ряд предлогаемых команд большую часть и зкоторых уже сделано: 
				1) вывод текста в терминал (эхо "# DZ_for_GIT" >>> README.md>>). Тройные стрелки предупреждают, что текст будет записан в файл после стрелок "README.md". Пропускаем этот 		пункт, так как после создадим его вручную. 
				2) объявление репозитория (git init) - репозиторий мы инициализировали,
				3) загрузка файла риидми (git add README.md) - мы добавили все файлы (git add . ), 
				4) комит репозитория (git commit -m "first commit") - все закомичено,
				5) дать название закомиченному проекту (git branch -M main) - мы назвали "back_git",
				6) подключение к удаленному репозиторию (git remote add origin https://github.com/GITHUB-SANICH/DZ_for_GIT.git). При прописи git "remote" без указания репозитория - будет 	выводиться удаленый репозиторий, к которомуц подключен локальный. Сейчас никакого подключения нет. "origin" - это название удаленного репозитория. Его можно менять.
				
				КОМАНДА ОТКЛЮЧЕНИЯ ОТ УДАЛЕННОГО РЕПОЗИТОРИЯ:	
				Если понадобится отключиться от удаленного репозитория достаточно ввести команду "git remote remove origin"
				Имея локальный репозторий и подключение к удаленному репозиторию можно загрузить данные на удаленный репозиторий:
				
				КОМАНДА ЗАГРУЗКИ ДАННЫЙ НА УДАЛЕННЫЙ РЕПОЗИТОРИЙ
				7) загрузка файлов на удаленный репозиторий (git push -u DZ_for_GIT back_git). Где DZ_for_GIT имя репозитория на который идет загрузка, и back_git имя скидываемого репозитория. 
				После выполнения команды терминал попросит авторизоваться, указав ЛП GitHab.
				8) Для настройки двойной аутентификации в GitHab нужно: 
					1. На аккаунте зайти в "developer settings" (настройки разработчика), затем "Персональные токены доступа". Выбираем генерацию нового токена, вводим пароль GitHab.
					2. Вводим опции по настройке токена. Например заметка по назначению токена, длитильность действия токена, назначения токена (например для репозиториев). Далее генерируем токе и копируем его. 
					3. Сгенерированный токен нужно внести в системные настройки компьютера. 
					Для OC Wondows 10 нужно из кнопки "пуск" => "учетные данные виндовс" => "учетные данные для ин6тернета" => вводим и ищем "git:https://github.com" => "редактирование" либо создаем новый элемент => вводим логин и ключ авторезации "токен". 
				
				КОМАНДА ЗАПИСИ В КЭШ:
					"git config --global credential.helper cach" - запись предыдущих команда в кэш, чтобы все данне не заполнять при новом подключении. 
				
				После всех операций данные должны были перейти на удаленный репозиторий. На него можно перейти по ссылке, указанной в командах. Файлы формата .txt не были перенесены на удаленный репозиторий, так как они были указаны в файле gitignore. Пустые папки тоже не были выгружены. Можно заходить на попки и файлы и смотреть в них написанный код. 
				
				СОЗДАНИЕ ФАЙЛА README:
					Так как удаленный репозиторий - публичный, то он предлогает создать файл README.txt. Но создадим его с расширением ".md" (marc down), так как формат ".txt" заигнорин. 
					Создадим файл внутри редактора, а не на GitHab. 
					формат .md это язык разметки, но не HTML. Для работы с этим форматом имеется достаточно документации. 
					После создания файла README загрузим и закомитим его. Если после после обратиться к удаленному репозиторию, то этого файла на нем не окажется. Его нужно запушить.
				
				КОМАНДА ПУША НА УДАЛЕННЫЙ РЕПОЗИТОРИЙ:
					"git push" - комнада отправки данный на удаленный репозиторий
					Для добавления файла на удаленный репозиторий помимо загрузки и коммита нужно прописать команду отправки на удаленный репозиторий. 
					После прописи команды нужно ввести ЛП владельца аккаунта GitHab. Файл залит на удаленный репощзиторий. 
					Если внести изменениея в файл на локальном репозитории, то его нужно загрузить и закомитить. 
					
				
					*/
				
		?>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>