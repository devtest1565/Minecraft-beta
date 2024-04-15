<?php

/*
 * $world
 * 
 * Set this to the name of your world, or leave it blank
 * to print a list of available worlds.
 * 
 */
$world = '';

// php-minecraft
echo "\n\nphp-minecraft\n=============\n";
require_once('classes/pmc.php');

if (!$world) {
	echo "No \$world variable set, please set it to one of the following:\n";
	foreach ($pmc->Saves->worlds as $w) {
		echo "$w\n";
	}
	die();
}
if (!$pmc->Saves->isWorld($world)) {
	echo "The \$world variable '$world' is invalid.\n";
}

$world = new World($world);

print_r($world);

echo "\nDone.\n";