<?php

$integer = 12;
$string = "12 chats";
$boolean = true;
$float = 12.5;
$array = ['banane', 'fraise'];
$date = new DateTime();
$null = null;

print_r($array);

var_dump(gettype($integer));
var_dump(gettype($string));
var_dump(gettype($float));
var_dump(gettype($array));
var_dump(gettype($date));
var_dump(gettype($null));
var_dump(is_numeric($integer));
var_dump(is_numeric($string));
var_dump(is_numeric($float));
var_dump(is_numeric($array));
var_dump(is_numeric($date));
var_dump(is_numeric($null));
var_dump(isset($integer));
var_dump(isset($string));
var_dump(isset($float));
var_dump(isset($array));
var_dump(isset($date));
var_dump(isset($null));