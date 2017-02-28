<?php 
 $q=$_POST['q'];
 $ar = array('а', 'о', 'и', 'е', 'ё', 'э', 'ы', 'у', 'ю', 'я');
 $str = $_POST['str'];
 $mark=false;
foreach($str as $char)
{
 if(in_array($char,$ar))
  {
   $mark=true;
   break;
  }
 }
 if($mark)
 echo "В строке $str есть гласные.";
 
?>