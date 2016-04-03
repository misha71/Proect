<?php
$article_title = $_POST['article_title'];
$article_text = $_POST['article_text'];
$article_author= $_POST['article_author'];
 
$connect = new mysqli("localhost", "root", "", "yii");
 
if($connect->query("insert into article values (0, '$article_title', '$article_text', '$article_author')"))
  echo "OK";
else
  echo "ОШИБКА В ЗАПРОСЕ!";
?>