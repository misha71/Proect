<?php
define("HOST", "localhost");
define("LOGIN", "root");
define("DBNAME", "yii");
define("PASS", "");

mysql_connect(HOST,LOGIN) or die("подключение не сотсоялось");
mysql_select_db(DBNAME) or die ("база данных не выбрана");
/* $create = "CREATE TABLE forpdo(id int AUTO_INCREMENT NOT NULL PRIMARY KEY, header text NOT NULL, mytext text NOT NULL)";
if (mysql_query($create)) {
 echo "Мишка, таблица создана";
}
else {
echo "таблица не создана";
} */
/* $sql = "INSERT INTO forpdo(header, mytext) values('заголовок 1', 'У меня получилось сделать хороший пример'), ('заголовок 2','Это действительно сработало'), ('заголовок 3','Отлично, я рад, что так получилось')";
mysql_query($sql); */
?>