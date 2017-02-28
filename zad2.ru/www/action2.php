<?php 
 $a=$_POST['a'];
 $b=$_POST['b'];
 $d=$_POST['d'];
 if(($d<$a) && ($a<15.3)){
	 $x=2*$a*$a-3*pow($b,3);
	 $y=$a-$d;
	 $k=1;
 } else{
	 $x=sqrt(abs($a-$b))+$d;
	 $y=10.5*b;
	 $k=2;
 }
 echo "x=$x<br /> y=$y<br /> k=$k";
 
?>