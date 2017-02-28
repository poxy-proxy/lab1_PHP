<?php 
 $q=$_POST['q'];
 $p=$_POST['p'];
 $l=$_POST['l'];
 $t=(($q*$q - $p)*$l)/(0.5*($l-$q*$q));
 $m=(1.27+($q*$q*$p*$p))/sqrt(abs(sin($q*$q)));
 echo "t=$t<br /> m=$m";
 
?>