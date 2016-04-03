<!DOCTYPE HTML>
<html>
<head>
<title>Практическое задание по созданию формы</title>
</head>
 <body>
<?
   $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
   $year = isset($_POST['year']) ? htmlspecialchars($_POST['year']) : '';
   $last = isset($_POST['last']) ? htmlspecialchars($_POST['last']) : '';
	 $mail = isset($_POST['mail']) ? htmlspecialchars($_POST['mail']) : '';
	 $mess = isset($_POST['mail']) ? htmlspecialchars($_POST['mess']) : '';
	 
   if (isset($_POST['name'], $_POST['year'], $_POST['last'], $_POST['mail'], $_POST['mess'])) {
     if ($_POST['name'] == '') {
       echo 'Укажите имя!<br>';
     }
		 else if ($_POST['last'] == '') {
		 echo 'Укажите фамилию!<br>';
		 }
		 else if (!preg_match("/^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$/i", $mail)) exit("Введите корректный e-mail"); 
		 else if ($_POST['year'] < 1900 || $_POST['year'] > 2004) {
       echo 'Укажите год рождения! Допустимый диапазон значений: 1900..2004<br>';
			 }
		 else if ($_POST['mess'] == '') {
		   echo 'Укажите сообщение!<br>';
		   }
		 else {
       echo 'Здравствуйте, ' . $name . '&nbsp;' . $last .'!<br>';
       $age = 2004 - $_POST['year'];
       echo 'Вам ' . $age . ' лет<br>';
     }
     echo '<hr>';
   }
 ?>
 <h1>Пройдите регистрацию на нашем сайте</h1>
 <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
   Введите Ваше имя:<br> <input type="text" name="name" value="<?=$name?>">
   <br>
	 Введите Вашу фамилию:<br> <input type= "text" name="last" value="<?=$last?>">
	 <br>
   Введите Ваш год рождения:<br> <input type="text" name="year" value="<?=$year?>">
	 <br>
	 Введите Ваш электронный адрес:<br>
	 <input type="text" name="mail" value="<?=$mail?>">
	 <br>
	 <h2>Введите дополнительные сведения</h2>
	 <textarea name='mess' value="<?=$mess?>" rows='5' cols='50'></textarea>
	 <br>
   <input type="submit" value="Отправить">
	 <br>
	 <input type="reset" name="reset" value="Очистить почту">
	 </form>
<?
$to = "mish.pawlow2010@yandex.ru";
$subject = "Сообщение с сайта Tursuperprice.ru";
$message = "Имя пославшего письмо: $name .\nЭлектронный адрес: $mail\nСообщение: $mess .";
mail ($to,$subject,$message,"Content-type:text/plain; charset = windows-1251") or print "Не могу отправить письмо !!!";
?>
</body>
</html>