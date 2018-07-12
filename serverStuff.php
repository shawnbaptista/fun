<?php

/* 
 * Various testing of $_SERVER and $GLOBALS
 * 
 * Requests images and displays them if of a specific file type,
 * otherwise "Welcome to PHP" will display.
 * 
 * Run the file locally with the following command:
 * php -S localhost:8000 fileName.php 
 */

echo $_SERVER['SERVER_NAME']; // localhost

if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false; // serve the requested resource as-is.
} else {
    echo "<p>Welcome to PHP</p>";
}

// Print out the PHP $GLOBALS array for viewing pleasure
echo "<pre>";
print_r($GLOBALS);
echo "</pre>";

?>
