<?php

/* Add your String as an argument in the command line and have the characters printed out to your terminal randomly capitalized: 

$ php -f random_caps.php -- "proper capitalization is the key to success"
proPEr CaPitALIZatIoN Is ThE KeY tO suCCeSs

*/


// "your argument should be in quotes like this"
$str = $argv[1];

// Convert all of the characters in your string to lowercase
$str = strtolower($str);

// Finds the length of your String stored in $str, loops through each character with a 50% chance of the character being capitalized
for ($i = 0, $c = strlen($str); $i<$c; $i++) {
  $str[$i] = rand(0, 99) >= 50?strtoupper($str[$i]):($str[$i]);
}

echo $str;

echo PHP_EOL;
