<?php
// Exemplo da função compact()

$name = 'John Doe';
$age = 30;
$email = 'johndoe@example.com';

$data = compact('name', 'age', 'email');

print_r($data);
// Output:
// Array (
//    [name] => John Doe
//    [age] => 30
//    [email] => johndoe@example.com
// )

// Exemplo da função extract()

$personData = [
   'name' => 'Jane Smith',
   'age' => 25,
   'email' => 'janesmith@example.com'
];

extract($personData);

echo $name;  // Output: Jane Smith
echo $age;   // Output: 25
echo $email; // Output: janesmith@example.com