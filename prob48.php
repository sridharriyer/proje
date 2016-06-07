<?php
# Project euler problem 48
$sum = 0;
for($i = 1; $i <= 1000; $i++)
{
  $sum = bcadd($sum , bcpow($i, $i, 0));
}
$lasttendigits = bcmod($sum,10000000000);
echo $lasttendigits;
?>
