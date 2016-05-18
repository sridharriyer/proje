<?php
/*
If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. 
The sum of these multiples is 23.
Find the sum of all the multiples of 3 or 5 below 1000.
*/

function findMultiplesOfNumber($num, $max_num='1000'){

	$NumbersOfGivenMultiple = array();
	$SumOfDigits = 0;
	foreach($num as $n){	
		$i=$n;
		while($i < $max_num){
			if($i%$n == 0){
				if(!array_search($i, $NumbersOfGivenMultiple)){
					$NumbersOfGivenMultiple[] = $i;
					$SumOfDigits += $i;
				}
				$i = $i + $n;
			}			
		}			
	}
	return $SumOfDigits;
}
$res = findMultiplesOfNumber(array(3,5));
print_r($res);
?>