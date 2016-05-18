<?php
/*
A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,

a2 + b2 = c2
For example, 3^2 + 4^2 = 9 + 16 = 25 = 5^2.

There exists exactly one Pythagorean triplet for which a + b + c = 1000.
Find the product abc.
*/
/* $number = floor(sqrt(1000));
echo $number; */
$lp = 0;
for($a=1; $a<=500; $a++){
	for($b=$a+1; $b<=500; $b++){
		for($c=$b+1; $c<=500; $c++){
			if($a+$b+$c == 1000){
				if(pow($c,2) == pow($a,2) + pow($b,2)){
					echo nl2br("Pythagorean triplet: ".$a." ".$b." ".$c."aaaa \n");
				}
				else{
					$lp = ++$lp;
				}
			}
		}
	}
}
echo "Sum of Pythagorean triplet: ". $lp;
?> 	