<?php

/**
 * Função LIST
 */

$fruits = array('apple', 'banana', 'orange');
list($fruit1, $fruit2, $fruit3) = $fruits;
// Atribui os valores do array $fruits às variáveis $fruit1, $fruit2 e $fruit3

$numbers = array(1, 2, 3, 4, 5);
list($num1,, $num3,, $num5) = $numbers;
// Atribui os valores do array $numbers às variáveis $num1, $num3 e $num5
// $num1 recebe 1, $num3 recebe 3 e $num5 recebe 5
// O segundo e o quarto elementos do array são ignorados usando espaços em branco na lista

function getCoordinates()
{
    return array(12.34, 56.78);
}

list($latitude, $longitude) = getCoordinates();
// Chama a função getCoordinates() e atribui os valores retornados às variáveis $latitude e $longitude
// $latitude recebe 12.34 e $longitude recebe 56.78

$person = ['John', 30, 'john@example.com'];
[$name, $age, $email] = $person;
// Sintaxe resumida é introduzida no PHP 7.1
// $name recebe 'John', $age recebe 30 e $email recebe 'john@example.com'