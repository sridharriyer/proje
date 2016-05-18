<?php
/*
Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.
*/
function sumOfSquaresOfFirstNNaturalNumbers($number){
	
	$sum = 0;
	$i=1;
	while($i<=100){
		
		$sum = $sum + pow($i,2);
		$i = $i + 1;
	}
	return $sum;
}
function squareOfSumOfFirstNNaturalNumbers($number){
	
	$sum = 0;
	$i=1;
	while($i<=100){
		
		$sum = $sum + $i;
		$i = $i + 1;
	}
	return pow($sum,2);
}
$sumOfSquares = sumOfSquaresOfFirstNNaturalNumbers(100);
$squareOfSum = squareOfSumOfFirstNNaturalNumbers(100);
//echo $sumOfSquares." ".$sumOfSquares;
echo abs($sumOfSquares-$squareOfSum);
?>