<?php

if ('toto' != 'tutu') {
	print "c'est vrai.";
} elseif ('titi' == 'tutu') {
	print "c'est ptet vrai";
} else {
	print "c'est faux";
}

$age = 123;
switch ($age) {
	case 123:
		print "C'est un deux trois\n";
		break;
	case 124:
		print "C'est un deux quatre\n";
		break;
	default:
		print "Autre chose.";
}