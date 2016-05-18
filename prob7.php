<?php
/*
By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.

What is the 10 001st prime number?
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
$numberOfPrimes= 0;
$j=2;
while($numberOfPrimes < 10001){
	if(findPrimeOrNot($j) == 1){
		$numberOfPrimes = $numberOfPrimes + 1;
	}
	$j = $j + 1;
}
echo $j-1;
?>