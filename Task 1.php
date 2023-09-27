<?php

$text = "The quick brown fox jumps over the lazy dog.";
$search = "brown";
$replace = "red";

// Convert the string to all lowercase
$text = strtolower($text);

// Replace "brown" with "red" in the string
$newString = str_replace($search, $replace, $text);

echo $newString;

?>
