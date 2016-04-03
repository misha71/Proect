<?
function name($chislo) {
return $chislo * 2;
}
$c = 2;
$res = "name";
 echo $res(6);
 
 $ca = "строка для замены";
 $filter = array("<", ">");
 $ca =str_replace($filter, "|", $ca);
 echo $ca;
 
 $per = "<Это строка которую мы хотели заменить>";
 $shablones = array("<",">");
 $ba = str_replace($shablones, " ",  $per);
 echo  $ba;
 ?>
 <br />
 <?

 for($i=0; $i<100; $i++)
 {
   echo "-";
 }
 ?>
  <br />
 <?
 $perka = array();
 $massiv = array("Один", "два", "три", "четыре");
 foreach($massiv as $value) {
 $perka[] = $value;
 }
 
 print_r ($perka);
 
?>
тест