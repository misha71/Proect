<?
function name($chislo) {
return $chislo * 2;
}
$c = 2;
$res = "name";
 echo $res(6);
 
 $ca = "������ ��� ������";
 $filter = array("<", ">");
 $ca =str_replace($filter, "|", $ca);
 echo $ca;
 
 $per = "<��� ������ ������� �� ������ ��������>";
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
 $massiv = array("����", "���", "���", "������");
 foreach($massiv as $value) {
 $perka[] = $value;
 }
 
 print_r ($perka);
 
?>
����