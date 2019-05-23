<?php //declare(strict_types=1);

function getName(?string $firstname, string $lastname = null): ?string
{
	return strtoupper("$firstname $lastname");
}

function helloMessage(string $firstname, string $lastname = null): void
{
	$name = getName($firstname, $lastname);
	
	print "Hello $name\n";
}

$myCatName = 'Shiva';

helloMessage("Gabriel", "Pillet");
print $name; // hors du scope
helloMessage($myCatName);
helloMessage(143);