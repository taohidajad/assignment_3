<?php

function generatePassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $shuffled = str_shuffle($characters);
    return substr($shuffled, 0, $length);
}

// Generate a password with a length of 12 characters
$generatedPassword = generatePassword(12);


echo $generatedPassword;

?>

