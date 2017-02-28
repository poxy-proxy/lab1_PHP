<?php 
 $q=$_POST['q'];
 $ar = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
 $str = $_POST['str'];
 $mark=false;
 $array=str_split($str);
foreach($array as $char)
{
 if(in_array($char,$ar))
  {
   $mark=true;
   break;
  }
 }
 if($mark){
 echo "В строке $str есть гласные.";
 } else {
	 echo "В строке $str нет гласных.";
 }
  
?>