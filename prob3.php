<?php
/*
The prime factors of 13195 are 5, 7, 13 and 29.

What is the largest prime factor of the number 600851475143 ?
*/
function findPrimeOrNot($number){
	$halfnum = $number/2;
	$flag = 0;
	for($i=2; $i<=$halfnum; $i++){
		if($number%$i == 0){
			return 0;	// is not a prime
		}
	}
	return 1;
}
function findLargestPrimeOfGivenNumber($number){
		if($number > 1){
			for($i = 2; $i<$number; $i++){
				if(fmod($number,$i) == 0 && findPrimeOrNot($i)){
					$number = $number/$i;
					return findLargestPrimeOfGivenNumber($number);
				}
			}
			return $number;
		}
		else if ($number == 1){
			return "1";
		}
		else if($number <=0){
			return "number must be greater than zero";
		}
}
echo findLargestPrimeOfGivenNumber($number=600851475143);
?>