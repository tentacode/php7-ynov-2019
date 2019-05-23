# Repartitor

Vous devez faire un script PHP "repartiror.php".

Ce script va lire un autre fichier, par exemple : `repartitor.php fichier_texte.txt`.

Ce script va compter le nombre d'occurences des caractères dans le fichier à analyser
ON NE COMPTE NI LES ESPACES (" "), NI LES RETOURS CHARIOTS ("\n").

Le script doit afficher les caractères et leur nombre d'occurence, en affichant le caractère qui a le plus d'occurence en premier (avec un `print_r` d'un tableau).

Il doit aussi à la fin afficher le total de caractères différents, ainsi que le total de caractères comptés.

Exemple de retour attendu :

```
Array
(
    [$] => 26
    [;] => 11
    [o] => 11
//...
    [_] => 1
    [g] => 1
    [:] => 1
    [v] => 1
    [.] => 1
)
36 (189)
```

Dans le retour ci-dessus on voit qu'il y a 26 fois le caractère `$`, 11 fois le caractère `;` etc. On voit aussi qu'il y a 36 caractères différents et 189 caractères au total dans le fichier.

Les fonctions pour lire un fichier sont [file_get_contents](http://php.net/manual/fr/function.file-get-contents.php) ou [file](http://php.net/manual/fr/function.file.php).