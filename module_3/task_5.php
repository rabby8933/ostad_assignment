<?php

// Task 5: Password Generator

function generatePassword($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomChar = $chars[rand(0, strlen($chars) - 1)];
        $password .= $randomChar;
    }

    return $password;
}

$password = generatePassword(12);

echo "Generated Password: " . $password;



