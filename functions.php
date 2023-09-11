<?php

$letters = 'abcdefghijklmnopqrstuvyxz';
$symbols = '*/-=+?!^%&);{<>|.,:[}]';
$numbers = '0123456789';

// Funzione che genera la password
function generatePassword($passLength, $letters, $symbols)
{
    $password = '';

    while (strlen($password) !== $passLength) {
        $indexLetter = rand(0, strlen($letters) - 1);
        $indexLetterUpper = rand(0, strlen($letters) - 1);
        $indexSymbol = rand(0, strlen($symbols) - 1);
        $randomNumber = rand(0, 9);

        if (strlen($password) !== $passLength) {
            $password .= $letters[$indexLetter];
        }

        if (strlen($password) !== $passLength) {
            $password .= $randomNumber;
        }

        if (strlen($password) !== $passLength) {
            $password .= strtoupper($letters[$indexLetterUpper]);
        }

        if (strlen($password) !== $passLength) {
            $password .= $symbols[$indexSymbol];
        }
    }

    // Mi ritorna la stringa della password mescolata
    return str_shuffle($password);
}

// Funzione che genera la password che appare nell'index
function generatePasswordSimple($passLength)
{
    // Variabili di lettere, simboli e numeri
    $letters = 'abcdefghijklmnopqrstuvyxz';
    $symbols = '*/-=+?!^%&);{<>|.,:[}]';
    $numbers = '0123456789';

    // Impostazione dei caratteri
    $chars = $letters;
    $chars .= strtoupper($letters);
    $chars .= $symbols;
    $chars .= $numbers;

    $password = '';

    while (strlen($password) !== $passLength) {
        $indexRandom = rand(0, strlen($chars) - 1);

        $password .= $chars[$indexRandom];
    }

    return $password;
}






