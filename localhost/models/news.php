<?
class News {
public static function getNewsList(){
$db = Db::getConnection();
/* $host = "localhost";
$dbname = "mysql";
$user = "root";
$password = "";
$db = new PDO("mysql:host=$host; dbname=$dbname", $user, $password); */
$newsList = array();
$result = $db->query("SELECT * FROM news order by idate DESC LIMIT 5");
$i = 0;
while($row = $result->fetch()) {
$newsList[$i]['id'] = $row['id'];
$newsList[$i]['idate'] = $row['idate'];
$newsList[$i]['title'] = $row['title'];
$newsList[$i]['announce'] = $row['announce'];
$i++;
}
return $newsList;
}
public static function getNewsItemById($id){
$id = intval($id);
if($id){
$db = Db::getConnection();
/* $host = "localhost";
$dbname = "mysql";
$user = "root";
$password = "";
$db = new PDO("mysql:host=$host; dbname=$dbname", $user, $password); */
$result = $db->query('SELECT * FROM news where id ='.$id);
$result ->setFetchMode(PDO::FETCH_ASSOC);
/* вывод ключа в виде цифры или названия
 $result ->setFetchMode(PDO::FETCH_NUM);
$result ->setFetchMode(PDO::FETCH_ASSOC); */

$newsItem = $result->fetch();
return $newsItem;
}
}
}

