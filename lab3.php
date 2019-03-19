<?php

/*
$txt = array("hello ","world");
echo  $txt[0] , $txt[1] ;

*/
$number = array(3, 5, 8 , 12 );

function tafel($getal){
	for ($i = 1; $i <= 10; $i++) {
	    echo "$i x $getal = " . $i*$getal;
	    echo "<br>";
	} 
}


foreach ($number as $value) {
	    tafel($value);
	    echo "<br>";
}



