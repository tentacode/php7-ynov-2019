# Calculette simple

L'objectif est de créer une calculette très simple dans un script php.

Le script doit être envoyé sur github dans votre dossier workspace, dans un dossier `challenges/02_calculette_simple/calculette_simple.php`.

En appelant le script avec des [arguments](https://www.php.net/manual/fr/reserved.variables.argv.php), on doit pouvoir afficher le résultat d'un calcul simple, par exemple `php calculette_simple.php 5 + 3` doit afficher 8.

Autres exemples d'arguments :

* `php calculette_simple.php 5 - 3` 2
* `php calculette_simple.php 5 x 3` 15
* `php calculette_simple.php 5 / 3` 1.666666 etc.

(bien sûr, il faut que ça marche avec d'autres chiffres, et aussi des chiffres à virgules `php calculette_simple.php 2.4 x 10` doit afficher 24).

Si comme arguments on donne une valeur invalide, on doit afficher une erreur "Impossible de calculer." (exemples d'arguments invalides : `5-3` sans espaces, `abc + 3`, `😎`).

Si on cherche à diviser par 0, on doit afficher un message "Impossible de diviser par zéro." (et il ne doit pas y avoir d'erreur PHP qui s'affiche).

Astuces : vous serez probablement amené à utiliser :

* pas mal de `if`
* un `switch`
* la fonction [is_numeric](http://php.net/manual/fr/function.is-numeric.php) de PHP
* la fonction [count](http://php.net/manual/fr/function.count.php) de PHP