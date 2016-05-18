<?php
/*
A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.

Find the largest palindrome made from the product of two 3-digit numbers.
*/
$numberOfDigits = 3;
function isPolindrome($num){
	if($num == strrev($num))
		return 1;
	return 0;
}
function findLargestPalindrom(){
	
	$count = 1;
	$polindromeList = array();
	$maxpolindrome = 0;
	$maxnum1 = $maxnum2 = 0;
	for($num1=999; $num1>99; $num1--){
		
		for($num2=999; $num2>99; $num2--){
		
				$num = $num1*$num2;
				if(isPolindrome($num)){
					
					if($maxpolindrome < $num){
						$maxpolindrome = $num;
						$maxnum1 = $num1;
						$maxnum2 = $num2;
					}
				}
				//$count++;
		}
	}
	return $maxpolindrome." ".$maxnum1." ".$maxnum2;
}
echo '<pre>';print_r(findLargestPalindrom());
?>