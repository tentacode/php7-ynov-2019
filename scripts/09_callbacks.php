<?php

$callable = function (string $name = null): string {
	return strtoupper(strrev($name));
};

$names = [
	'Gabriel',
	'Jean Charles',
	'Toto',
];

print_r($names);
print_r(array_map($callable, $names));