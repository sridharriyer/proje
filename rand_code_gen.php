<?php
random_string(20);

function random_string($length) {
	
	$len = $length;
	$base ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
	$max = strlen($base)-1;
	$activatecode='';
	mt_srand((double)microtime*1000000);
	while (strlen($activatecode)<$len+1)
		$activatecode .=$base(mt_srand(0,$max));
	echo $activatecode;
}
?>