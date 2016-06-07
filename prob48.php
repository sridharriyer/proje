<?php
# Project euler problem 48
$sum = 0;
for($number = 1; $number <= 1000; $number++)
{
  $sum = bcadd($sum , bcpow($number,$number, 0));
}
$lasttendigits = bcmod($sum,10000000000);
echo $lasttendigits;
?>
