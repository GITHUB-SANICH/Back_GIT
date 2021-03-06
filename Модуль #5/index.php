<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Тайтл</title>
</head>

<body></body>
<header>
	Шапка сайта
</header>
<footer>Подвал сайта</footer>
<?php
echo '<hr><hr><br><h2>Модуль №5: Создание блога. Статьи, комментарии, отправка почты
</h2>' . "<br>";
echo '<hr><hr><br><h3>Back - #5 - Добавление статей в БД через интерфейс сайта
				</h3><hr><hr>' . "<br>";
			/*Введение:
				У зарегистрированных пользователей должны быть дополнительные функции, которые не доступны обычным пользователям. В уроке мы сделаем возможность добавления статей с сайта через форму, прямиком в базу данных. Каждая статья будет иметь заголовок, вступительный текст, а также основной текст.
				Структура добавления статей через форму очень схожа со структурой регистрации пользователя. Вы также получаете данные, также проверяете их и также заполняете их в базу данных.
				Главное, что вам необходимо добавить здесь, так это проверку является ли пользователь зарегистрированным на сайте. Это можно делать проверя ранее установленное Куки. Если он зарегистрирован, то вы даете ему возможность добавления статей на сайте.
			
			
			СОЗДАНИЕ СТРАНИЦЫ ДОБАВЛЕНИЯ СТАТЬИ
				Для начала в хедере добюавим ссылку на статью, отображающеюся при наличии куки. 
				Пример:
				if ($_COOKIE['cookie_log'] == 0){
					echo '<a class="link-secondary" href="/article.php">Добавить статью</a>';
				}
			
			Страница должна быть доступны  только авторизованным пользователям. Поэтому в самое начало страницы добавления статей - добавим проверку на наличие куки и в случаи их отсутствия перенаправлять гостя (неавторизованного пользователя) на страницу регистрации. Т.е. в случаи попытки входа неавторизованным пользователем - его перекидывает на страницу регистрации.
			Пример: 
			<?php
			//проверка на наличие авторизации 
			if ($_COOKIE['cookie_log'] == '') {
				header('Location: /reg.php');
				exit();
			}
?>

				
			СОЗДАНЕИ AJAX ЗАПРОСА ДОБАВЛЕНИЯ СТАТЬИ
			Аякс запрос не несет изменений кроме как замену значений айдишников, адресов обработчика. 
			За тема добавляем таблицу в БД, которая будет хранить добавленные статьи. Помимо данных из формы - таблица будет хранить время добавления статьи и ее автора. Автоматически будет подставляться посетитель сайта, добавивший статью. 

			СОЗДАНИЕ ОБРАБОТЧИКА ДОБАВЛЕНИЯ СТАТЬИ
				Копируем содержимое обработчика регистрации, заменяем данные. Убираем функции работы с паролем. 
				Так выглядет передача данных для обработки:
				$query->execute([$title, $intro, $text, $_COOKIE['cookie_log'],  time()]);, где time() - время добавления, а $_COOKIE['cookie_log'] - логин пользователя.
				*/

				echo '<hr><hr><br><h3>Back - #6 -Вывод всех статей из базы данных
				</h3><hr><hr>' . "<br>";
			/*Введение:
			Поскольку сайт является блогом, то в нем необходимо отображать различные статьи. Все статьи будут храниться в базе данных. В ходе урока вы научитесь получать статьи из БД и выводить их на главной странице сайта. Вы научитесь как легко можно манипулировать данными и выводить их в различных HTML тегах для придания сайту красивого вида.
			Для вывода статей необходимо отослать SQL запрос, в котором вы указываете вывод всего из определенной таблицы. В нашем случае такая таблица это articles.

			На главной странице в блоке контента прописываем тег PHP и пропиываем в нем подключение к БД. 
			Затем прописываем запрос на вывод всех статей. 

			ВНИМАНИЕ! 
			По добавлению статьи выяснилось, что уничтожение куки при выходе пользователя с сайта написано неверно. 
			Дело в том, что сейчас прописано: "setcookie('cookie_log', $login, time() - 3600*24*7, "/");  //сброс куки после выхода из аккаунта". 
			Но нужно после этого еще прописать: 
			Мало того нужно обнулить время куки - нужно еще и удалить его. Обнуления не означает его удаление? А точнее элемент в массиве куки.
			И ЕЩЕ ... если неправильно удалить куки ... то выковырчивать его уже нельзя) Так как она попадет в кэш - и элемент пропадает уже по истечению времени.
			Тогда уже будет проще верно прописать удаление кику при выходе и заменить этот элекмент массива куки на всем сайте О_О. 
			*/

			echo '<hr><hr><br><h3>Back - #7 - Динамически изменяемые страницы статей
				</h3><hr><hr>' . "<br>";
			/*Введение:
			В ходе урока мы создадим одну динамическую страницу. Она будет менятся в зависимости от параметра из URL. Такие страницы очень удобны, так как нам нет необходимости создавать десятки одинаковых. Вместо них мы меняем лишь одну страницу сайта.
			Динамические страницы - это такие страницы, содержание которых изменяется в зависимости от параметра в URL адресе.
			В ходе урока мы создадим лишь одну страницу, которая будет выводить нам лишь одну статью из базы данных в развернутом виде. Статьи будут браться по специальному идентификатору, поэтому каждый раз будет выводиться новая статья с новыми значениями.
			В уроке мы научились прописывать верные URL адресы и далее через метод GET получать необходимые данные из них.
			
			СОЗДАНИЕ ССЫЛКИ КНОПОК СТАТЕЙ
			Поместим кнопку отправки на полную версию статьи в ссылку на динамическую страницу. 
			Пример ссылки: 
			<a href='/news.php?id=$row->id' tiile='$row->title'>
				<button class='mb-4 p-3 green_button'>Полная версия статьи</button>
			</a>
			Ссылка настроена таким образом, что при переходе не страницу - по условию будет генерироваться данные статьи, id которой совпадал с ссылкой.
			
			СОЗДАНИЕ ФАЙЛА ГЕНЕРАЦИИ СТАТЬИ
			Создаем файл "news.php". Перенесем в файл весь код из index.php.
			И перед тем как заменять заглавие страницы, содержимое и ссылки - напишим запрос в начале страницы, перенеся его из содержимого страницы в шапку. 
			Запрос:
			$sql = 'SELECT * FROM `articles` WHERE `id` = :id';
				$query = $pdo->prepare($sql);
				$query->execute(['id' => $_GET['id']]);
				$article = $query->fetch(PDO::FETCH_OBJ);
  				$site_title = $article->title; 
			где, 
			$_GET['id'] - это  значение 'id', которое было присвоено в ссылки на странце 'index.php'. (?=id$row->id).
			$site_title = $article->title - заглавие генерируемой страницы.
			
			ЗАПОЛНЕНЕИ СОДЕРЖИМОГО ГЕНЕРИРУЕМОЙ СТРАНИЦЫ
			Код генерации содержимого статьи в блоке контента не требует подробного разбора. 
				Отдельно стоит только рассмотреть вывод времени публикации. 
				Дата хранится в формате секунд в БД. Переведем ее в удобопонятный человеку формат. 
				Код вывода времени публикации статьи: 
					<?php
						//Вывод дня публикации статьи
							$date = date('d ', $article->date); - формат времени в днях согласно времени из БД.
						//месяцы - самописный массив
							$mesyac = ['Января', 'Февраля', 'Марта', 'Апреля', 'Мая', 'Июня', 'Июля', 'Августа','Сентября', 'Октября', 'Ноября', 'Декабря'];
						//Вывод месяца пубдикации статьи. Добавление значений к переменной (.=).
							$date .= $mesyac[date('n', $article->date) - 1]; - формат времени без ведущего нуля (1-12). 
							"-1" - вычитание одного нужно, чтобы номер индекса массива совпадал с числом из формата времени в месяцах.
						//Вывод времени публикации статьи. Снова добавляем значение к переменной, так как ее еще придется выводить - нельзя ее перезаписывать.
							$date .= date(' H:i', $article->date);
					?>
				<p><b>Время публикации статьи: </b><?=$date?></p>
				где, 
				date() - функция вывода времени, где 1-й аргумент это формат, а 2-й время в UNIX.
				$mesyac = ['Января', 'Февраля', 'Марта', 'Апреля', 'Мая', 'Июня', 'Июля', 'Августа','Сентября', 'Октября', 'Ноября', 'Декабря'];-месяцы в кириллице
				$date .= $mesyac[date('n', $article->date) - 1]; - добавление к переменной значения месяца согласно дате
				$date .= date(' H:i', $article->date); - добавление к переменной времни добавление
				<?=$date?> - вывод значения переменной
				.= - оператор добавления значения к переменной.
				
				ВОЗМОЖНОСТЬ ПИСАТЬ СТЬАТЬИ В ТЕГАМИ
				Для этого достаточно на обработчике добавления статей убрать фильтры на текст. Но это рискованный путь, так как бьет по защите и если этот фильтр снимать, то только если самоому добавлять статьи. 
			*/

			echo '<hr><hr><br><h3>Back - #8 - Форма добавление комментариев к статьям
				</h3><hr><hr>' . "<br>";
			/*Введение:
			Любому блогу нужна форма комментариев, чтобы на нем происходила определенная социальная жизнь. В ходе урока мы создадим форму для добавления комментариев, а также пропишем всю логику при добавлении, проверках и отправке данных из формы.
			Создание комментариев это важная часть любого блога. Вы можете воспользоваться уже готовыми решениями или же создать такую форму самостоятельно.

			Блоки вывода комментарием и их коментирование - выведим ниже содержимого статьи. 
			Комментарии будут оставляться через заполнение формы, поэтому копируем ее из страницы регистрации. 
			Так как страницу в любом случаи придется перезагружать, так как в обработчиком будет генерируемая страницы и на нее нельзя прописать постоянный путь, который прописывается в ajax - ajax для комментариев писаться не будет.  
			Ссылка на обработчик будет выглядеть так: 
			<form action="/news.php<?=$_GET['id']?>" method="post" class="mb-3">
			НА ЭТОИ РАЗ НАПИШЕМ ОБРАБОТЧИКА без AJAX, используя оповещение об ошибках через СЕСИИ ... потом ... может быть ... 
			Проверять данные будем сразу под формой комментария. 
			Написав запрос - создадим таблицу в БД, где будут храниться комментари.
			По-умолчанию предлагается создать 4 поля  в таблице, но если нужно только 3 - 4-е поле можно просто не заполнять. 
			Id статьи в таблице не будем делать уникальным, так как к одной и тойже статье может быть написано множество комментариев. Иначе написать можно было бы только один комментарий. 

			В поле написания статьи - имя пользователя уже должно быть автматически заполнено без вожможности редактирования - оно берется через куки. 
			Для этого в поле вставляем атребут value="<?=$_GET['cookie-log']?>" и атребут поля "readonly" - запрещающий редактирование поля (только просматривать).
			Ниже пишем запрос на добавление статьи и ниже после блока условия - запрос запрос на вывод всех комментариев чей article_id равен id выведенной статьи. Остается прогнать комментарии через цикл foreech.  

			Вместо ajax сначала предпологадлось использовать SESSION, однако редирект с динамическими страницами не работает. 
			Пример: 
				function redirect()
					{
						header("Location: $_SERVER[DOCUMENT_ROOT]/news.php?id=<?=$_GET[id]?>");
						exit();
					}
			

			*/
			
			echo '<hr><hr><br><h3>Back - #9 - Отправка почты с сайта
			</h3><hr><hr>' . "<br>";
		/*Введение:
		Еще одна отличительная черта языка PHP - это умение передавать данные для отправки почты на электронные адреса. В уроке будет создана HTML форма, которая будет отсылать данные на сервер при помощи асинхронного программирования и далее данные будут отправляться по почте при помощи специальной функции mail.
		Для отправки почты необходимо использовать функцию mail. Функция автоматически отправляет сообщение message получателю to. Можно специфицировать несколько получателей, разделив запятой адреса в to. С помощью этой функции можно высылать Email с присоединением/attachment и содержимое специальных типов.
		mail() возвращает TRUE, если почта была успешно принята для доставки, FALSE в ином случае.
		Важно! Обратите внимание, успешно принято для доставки не подразумевает, что почта фактически достигнет предназначенного назначения.

			СОЗДАНИЕ СТРАНИЦЫ ВВОДА СООБЩЕНИЯ
			Для отправки письма нужно добавить ссылку на страницу "контакты". На которой будет распологаться email. 
			Тип кнопки нужно указывать "button", так как если его не указывать - по-умолчанию подставляется "submit", перезагружающий страницу.
			Поместим в нее весь код из страницы reg.php. Оставим три поля на имя, почту получателя и сообщение. Ajax используется - в нем добавим адрес обработчика mail.php. 
			И добавим в случаи успешной отправки сбрасывание содержимого полей формы:
			$('#username').val("");		//в случаи успешной отправки опустошать содержимое полей формы

			СОЗДАНИЕ СТРАНИЦЫ ОБРАБОТЧИКА ОТПРАВКИ СООБЩЕНИЯ
			Переносим в обработчик почты только фильтр и проверку из обработчика регистрации.
			Функция отправки почты состаит из 4-х параметров. 
			1-й параметр это адрес почты, на который отправляется сообщение. 
			2-й параметр это тема письма. Ее нужно кодировать. 
				Пример: $tema_mail = "=?utf-8?B?".base64_encode('Новое сообщение с сайта')."?=";, 
				где, 
				"=?utf-8?B?".base64_encode() - шаблон для обработки кириллицы. А а сожержимое скобок - сама тема сообщения. Поле для него можно указать на сайте.
			3-й параметр это само сообщение. 
			4-й параметр это хеадерс - заголовки. Это шаблон который достаточно запомнить.
			Пример: 
			$headers = "From: $email\r\nReply-to: $email\r\nContent-tyle: text/html; carset=utf-8\r\n";
			где,
			From: $email - почта автора сообщения.
			\r\n - перевод курсора на новую строку. 
			Reply-to: $email - почта, на которую можно ответить обратно
			Content-tyle: text/html - сообщение с учтотом htmp либо без нее. 
			carset=utf-8 - кодировка

			ВАЖНО! Скорее всего с локального сервера почта не будет отправляться на реальный email.
			Хотя весь код прописан верно.


		*/

?>
</body>

</html>