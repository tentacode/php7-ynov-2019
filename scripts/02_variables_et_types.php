<?php

define('CAT_RACE', 'Européen');

$myCatName = 'Shiva';
$myCatWeight = 8;
$myCatIntelectualQuotient = 1.5;
$myCatIsFat = true;
$timezoneFr = new DateTimeZone('Europe/Paris');
$myCatBirthday = new DateTime('now', $timezoneFr);
//unset($myCatBirthday);
//var_dump($myCatBirthday);
//print "TOTO";
//die();

$myCatEats = [
	12,
	false,
	"Parmesan",
	"Thon",
];

print $myCatName.' ('.CAT_RACE.') pèse '.$myCatWeight.' kilos'.PHP_EOL;

var_dump(
	$myCatBirthday,
	$myCatIntelectualQuotient,
	$myCatWeight,
	$myCatName,
	$myCatIsFat,
	$myCatEats
);

die("\nFin du script");