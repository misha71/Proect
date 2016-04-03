<?
include_once ROOT."/models/news.php";
class NewsController {
public function actionIndex() {
$newsList = array();
$newsList = News::getNewsList();
include ROOT."/views/news/catalog/index.php";
return true;
}

public function actionView($id) {
$newsItem = News::getNewsItemById($id);
include ROOT."/views/news/detail/index.php";
return true;
}



}



?>