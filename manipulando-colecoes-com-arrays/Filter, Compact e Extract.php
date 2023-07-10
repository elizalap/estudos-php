<?php

/**
 * Função filter()
 */
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$evenNumbers = array_filter($numbers, function ($num) {
   // Função de callback que verifica se o número é par
   return $num % 2 == 0;
});

print_r($evenNumbers);
// Output: Array ([1] => 2, [3] => 4, [5] => 6, [7] => 8, [9] => 10)

/**
 * Função map()
 */
$numbers = [1, 2, 3, 4, 5];

$squareNumbers = array_map(function ($num) {
   // Função de callback que retorna o quadrado de cada número
   return $num * $num;
}, $numbers);

print_r($squareNumbers);
// Output: Array ([0] => 1, [1] => 4, [2] => 9, [3] => 16, [4] => 25)

/**
 *  Função reduce()
 */
$numbers = [1, 2, 3, 4, 5];

$sum = array_reduce($numbers, function ($carry, $num) {
   // Função de callback que calcula a soma acumulada dos números
   return $carry + $num;
});

echo $sum;
// Output: 15