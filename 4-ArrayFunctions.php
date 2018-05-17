<?php

# 7- Most useful array functions - Important
// دوال مهمة يمكننا استخدامها مع المصفوفة 

  # 1- print_r()
  # 2- var_dump()
  
  # 3- explode()
  // بستخدام هذا الدالة, نستطيع نحول اي نص  الى مصفوفة بستخدام 
  // كيف: نفرض عدنا نص وهذا النص طويل لكن بين كل كلمة وكلمة يوجد رمز مثل خط مائل او فارزة
  // نمرر هذا النص والرمز المتكرر للدالة ويقوم بتحويلها الى مصفوفة
  
  $string = 'Nael|Onur|Afnan';
  $arr = explode('|', $string);
  // print_r($arr);

  $string2 = 'Mustafa,Ammar,Rana';
  $arr2 = explode(',', $string2);
  // print_r($arr2);

  // 4- implode()
  // هذه الدالة  تعمل نفس الاول فقط يقوم يتحويل المصفوفة لنص
  $arr3 = ['Nael', 'Afnan', 'Mustafa'];
  //echo implode(', ', $arr3);

  // 5- count()
  // هذه الدالة تطبع النه حجم المصفوفة بالرقم
  //echo count($arr3);

  // 6 - is_array()
  // هذه الدالة مفيدة جدا في حالة تاكد من شرط معين مثلا هل المتغير عباره عن دالة ام لا
  // if(is_array($arr3)) {
  //   echo 'Yes, its an array';
  // }

  // 7- shuffle()
  // هذه الدالة تقوم بتغير ترتيب القيم الموجودة بالدالة عشواية
  //shuffle($arr3);
  //print_r($arr3);

  // 8 - array_combine()
  // بستخدام هذه الدالة نستطيع دمج مصفوفتين, نفرض عدنا مصفوفة الاولى فقط بس الاندكس 
  // والثانية نفرضها قيم
  $indexs = ['firstName', 'lastName'];
  $values = ['Nael', 'Muhammed'];
  // نمرر الاثنين, ويطلع النه مصفوفة جديدة بيها الاندكس والقيم
  $names = array_combine($indexs, $values);
  //print_r($names);

  // 9 - array_count_values()
  // فقط هذا الدالة تنطينا مجمود كل قيمة متكرره بداخل المصفوفة Count هذه الدالة تشبه دالة
  $allNames = ['ahmed', 'ali', 'ahmed', 'onur', 'ali'];
  $totalCounts = array_count_values($allNames);
  //print_r($totalCounts);

 // 10 - array_flip()
 // بستخدام هذه الدالة نستطيع نعكس قيم القيم بالمفاتيح 
 // (indexs)
 $people = [
   'Abdulrahman' => 'abdo@gmail.com',
   'Mustafa' => 'musti@hotmail.com',
 ];

 $arrFlip = array_flip($people);

 // 11- array_key_exists()
 // بستخدام هذا الدالة نستطيع نتاكدهل القيمة موجودة داخل المصفوفة
 // 
 if (array_key_exists('Abdulrahman', $people)) {
   // echo 'Yes it exists';
 }else {
   // echo 'No, it dose not';
 }

 // 12- array_map()

 $arrNumbers = [1,2,3,4,5,6];
 function arr_filter($item) {
   return $item + 2;
 }

 $arrTotal = array_map('arr_filter', $arrNumbers);

//  print_r($arrTotal);

// 13 - array_filter()
$totalNumbers = array_filter($arrNumbers, function($a) {
  return $a >= 1 && $a <= 6;
});

// 14 - array_merge()
$person1 = ['Afnan'];
$person2 = ['Abdulrahman'];
$merge = array_merge($person1, $person2);
// print_r($merge);

// 15 - array_rand()
$arrRand = array_rand($arrNumbers, 3);
// print_r($arrRand);

// 16 - array_reverse()
$arrPeople = ["Abdulrahman", "Ali", "Afnan", "Nael"];
$reverseArr = array_reverse($arrPeople);
// print_r($reverseArr);

// 17 - array_search()
$searchKey = array_search("Afnan", $arrPeople);
//echo $searchKey;

// 18 - array_keys()
$searchMultipleKeys = array_keys($arrPeople, "Abdulrahman");
//print_r($searchMultipleKeys);

// 19 - array_shift()
$firstValue = array_shift($arrPeople);
//echo $firstValue;

// 20 - array_pop()
$lastValue = array_pop($arrPeople);
//echo $lastValue;

// 21 - array_slice()
$arrAllNumber = [20,30,200,30,192,283];
$slicedValues = array_slice($arrAllNumber, 2);
//print_r($slicedValues);

$slicedInBetween = array_slice($arrAllNumber, 3, 2);
//print_r($slicedInBetween);

// 22 - array_sum()
$totalSum = array_sum($arrAllNumber);
//echo $totalSum;

// 23 - array_product()
$multiply = array_product($arrAllNumber);
//echo $multiply;

// 24 - array_unique()
$removeDuplicates = array_unique($arrAllNumber);
//print_r($removeDuplicates);

// 25 - array_values()
//$arrayValue = array("size" => "XL", "color" => "gold");
// or this way
$arrayValue = [
    "size" => "XL", 
    "color" => "gold"];
print_r(array_values($arrayValue));

// 26 - array_push()
//array_push($arrAllNumber, 91,29,40,200);
//print_r($arrAllNumber);

// or this way;
$arrAllNumber[2] = 1; // if we want to override
$arrAllNumber[] = 999; // if we want to add new value onto array
//print_r($arrAllNumber);



?>