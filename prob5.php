<?php
/*
2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.

What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?

find 20!;
*/
function findPrimeFactors($number,$prime_factors=array()){
	$i=2;
	while($i <=$number){
		if(fmod($number,$i) == 0){
			$prime_factors[] = $i;
			$number = $number/$i;
			return findPrimeFactors($number,$prime_factors);
		}
		$i++;
	}
	return $prime_factors;
}
function findSmallestNumberDivisible(){
	$num = 1;
	$prime = array();
	for($i=2; $i<=20; $i++) {
		$prime_factors = findPrimeFactors($i);
		$prime_factors_with_count = array_count_values($prime_factors);
		foreach($prime_factors_with_count as $prime_factor => $repeated){			
				if(!in_array($prime_factor,$prime)){
					$prime[] = $prime_factor;
				}				
				$prime_with_count = array_count_values($prime);
				foreach($prime_with_count as $p => $v){					
					if($p == $prime_factor && $repeated > $v){
						$i=$v;
						while($repeated>$i){
							$prime[] = $prime_factor;
							$i++;
						}
					}
				}
		}
	}
	$prime_with_count = array_count_values($prime);
	$smallestDivisibleNumber = 1;
	foreach($prime_with_count as $p => $v){
		
		$smallestDivisibleNumber = $smallestDivisibleNumber * pow($p, $v);
	}
	return $smallestDivisibleNumber;
}
echo nl2br('\n');
echo '<pre>'; print_r(findSmallestNumberDivisible());
?>