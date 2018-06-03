<?php
// Loops
// Type of Loops
# 1- For : we use it, if we know the exact block of code in a set number of times
/*
      It takes 3 param: initialzer, Condition, Increment value,
    */

for ($num = 0; $num <= 10; $num++) {
    //echo $num.'</br>';
}

// with Arrays
$_arr = [10, 28, 1, 29, 38, 49, 19];
for ($num = 0; $num < count($_arr); $num++) {
    //echo $_arr[$num]. '</br>';
}

# 2- While
$isValid = true;
$_n = 0;

// while ($isValid !== false) {
//   echo $_n;

//   $_n++;

//   if ($_n === 5) {
//     $isValid = false;
//   }
// }

# 3- Do.. while

$_number = 0;

// do {
//   echo $_number;
//   $_number++;
// } while ($_number < 1);

#4 - foreach
$_cities = ['Kirkuk', 'Baghdad', 'Diyala', 'Wasit', 'Basrah'];
foreach ($_cities as $key => $city) {
    //echo $key. ' - ' . $city.'</br>';
}
$_students = [
    'Ahmed' => 'Ahmed@cfi.com',
    'Afnan' => 'Afnan@cfi.com',
    'Nael' => 'Nael@cfi.com',
    'Tahseen' => 'Tahseen@cfi.com'
];
//$arr = array(1, 2, 3, 4);
foreach ($_students as $name => $email) {
    echo "<span style='color: red;'>Name:</span> $name , <span style='color: red;'>Email:</span>: {$email}" .
        '</br>';
}
