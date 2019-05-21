<?php

$integer = -1;
$string = null;
$boolean = false;
$float = 12.9;
$array = ['banane', 'fraise'];
$date = new DateTime();
$null = null;

if ((bool)$date) {
	echo "oui";	
} else {
	echo "non.";
}