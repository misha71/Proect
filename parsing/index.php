﻿<?/* примеры внешнего парсинга */include('simple_html_dom.php'); // Create DOM from URL or file/* $html = file_get_html('http://www.google.com/'); */// Find all images /* foreach($html->find('img') as $element)        echo $element->src . '<br>'; */// Find all links /* foreach($html->find('a') as $element)        echo $element->href . '<br>'; */	   	   $html = new simple_html_dom();   $path = "mybook.doc";$html->load_file("http://www.universalinternetlibrary.ru/book/32852/ogl.shtml");$items = $html->find('p.book');foreach($items as $thing) {/* можно или вывести данные на экран или записать их в базу файл*/file_put_contents($path, $thing,FILE_APPEND);} /* примеры парсинга  внутренего*//* $html = new simple_html_dom();   $html->load_file("object.php");$element = $html->find("div");	   $element[0]->innertext ="у меня получилось";echo $html->save(); */?>