<?
class Db {
public static function getConnection() {
$paramsPath = ROOT."/config/db_params.php";
$params = include($paramsPath);
$host = $params['host'];
$dbname = $params['dbname'];
$db = new PDO("mysql:host=$host; dbname=$dbname",$params['user'],$params['pasword']);
return $db;
}
}

?>