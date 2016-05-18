<?php
ini_set('max_execution_time', 30000);
/*
Summation of primes
Problem 10
The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.

Find the sum of all the primes below two million.
*/

function findPrimeOrNot($number){
	$halfnum = sqrt($number);
	$flag = 0;
	for($i=2; $i<=$halfnum; $i++){
		if($number%$i == 0){
			return 0;	// is not a prime
		}
	}
	return 1;
}
$sum = 0;
for($i=2; $i<=2000000; $i++){
	
	if(findPrimeOrNot($i)){
		$sum = $sum + $i;
	}
}
echo "Sum = ".$sum;
?> 	