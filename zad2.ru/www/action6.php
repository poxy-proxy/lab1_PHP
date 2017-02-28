<?php 
 for($i=0;$i<20;$i++){
	$l[$i]=rand(0,5)/2;
	}
echo "L=";
print_r($l);

for($i=0;$i<8;$i++){
	$m[$i]=rand(0,5)/2;
	}
echo "<br/>M=";
print_r($m);
$nl=0;$nm=0;
foreach ($l as &$value) {
    if($value == 0) $nl++;
}
foreach ($m as &$value) {
    if($value == 1.5) $nm++;
}
$k=($nl+$nm)/28;
echo "<br/> K=$k;"
?>