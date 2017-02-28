<?php 

for($i=0;$i<19;$i++){
	$t[$i]=rand(0,100);
	}
echo "T=";
print_r($t); 

for($i=0;$i<19;$i++){
	$v[$i]=rand(0,100);
	}
echo " <br/> V=";
print_r($v); 	


for($i=0;$i<19;$i++){
	$s[$i]=$v[$i]*$t[$i];
	}
echo " <br/> S=";
print_r($s); 

$vsr=array_sum($v)/count($v);
$tsr=array_sum($t)/count($t);

 echo "<br/> Среднее арифметическое массива v: $vsr<br /> 
 Среднее арифметическое массива t: $tsr";
 
?>