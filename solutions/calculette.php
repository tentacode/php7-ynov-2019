<?php
// en cas d'erreur, on fera un die() avec ce message
$errorMessage = "Impossible de calculer.\n";

// le bon nombre d'argument est 3 "14 + 12",
// $argv doit contenir exactement 4 éléments
if (count($argv) !== 4) {
    die($errorMessage);
}

// on récupère l'opérande de gauche : le premier argument
if (isset($argv[1])) {
    $left = $argv[1];
    
    if (!is_numeric($left)) {
        die($errorMessage);
    }
}
// on récupère l'opérande de droite : le troisième argument
if (isset($argv[3])) {
    $right = $argv[3];
    
    if (!is_numeric($right)) {
        die($errorMessage);
    }
}
// on fait l'opération en fonction du signe : le deuxième argument
switch ($argv[2]) {
    case '+':
        print $left + $right;
        break;
    case '-':
        print $left - $right;
        break;
    case 'x':
        print $left * $right;
        break;
    case '/':
        if ($right == 0) {
            die("Impossible de diviser par zéro.\n");
        }
    
        print $left / $right;
        break;
    default:
        die($errorMessage);
        break;
}
print "\n";
