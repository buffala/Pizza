<?php
/* --- cookie functions -- */
$fiveMin = time() + (0 * 0 * 0 * 30);
$fName = $_POST['fName'];

setcookie('fname', $fName, $fiveMin);

// if cookie set document element name
function docName($on, $dm){
	$n = $dm;
	if (isset($_COOKIE[$dm])){
		$n = $_COOKIE[$on];
	}// end of if
	echo $n;
}// end of docName