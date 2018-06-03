
<?php
# 7- Array functions (Important) - دوال المصفوفات

// 1- var_dump()
/*
وظيفتها عرض وإظهار نوع وقيمة المتغير، ومن الأمور التي يعتادها المبرمجين هي استعمال هذه الدالة للتأكد من قيمة متغير ما, أي للأغراض التجريبية، وفي حالة المصفوفة تُظهر نوع المصفوفة مع عدد القيم قيمها، ونوع كل قيمة بها.
*/

$_data = ['Nael', 'Afnan', 1, 1.1];
//var_dump($_data);

// 2-print_r()
// تظهر معلومات حول المتغيّر، نوعه ومحتواه، في حال المصفوفة تظهر المعلومات بشكل أبسط من سابقتها بالنسبة للمستخدم.
// print_r($_data);

# 3- explode()
// بستخدام هذا الدالة, نستطيع نحول اي نص  الى مصفوفة بستخدام
// كيف: نفرض عدنا نص وهذا النص طويل بس بين كل كلمة وكلمة اكو رمز مثل خط مائل او فارزة
// نمرر هذا النص والرمز المتكرر للدالة ويقوم بتحويلها للموصفة

$string1 = 'Nael|Onur|Afnan';
$arr = explode('|', $string);
//print_r($arr);

$string2 = 'Mustafa,Ammar,Rana';
$arr2 = explode(',', $string2);
//print_r($arr2);

// 4- implode()
// هذه الدالة  تعمل نفس الاول فقط يقوم يتحويل المصفوفة لنص
$arr3 = ['Nael', 'Afnan', 'Mustafa'];
//echo implode(', ', $arr3);

// 5- count()
// هذه الدالة تطبع النه حجم المصفوفة بالرقم
//echo count($arr3);

// 6 - is_array()
// هذه الدالة كثير مفيدة في حالة تاكد من شرط معين مثلا هل المتغير عباره عن دالة ام لا
if (is_array($arr3)) {
    // echo 'Yes, its an array';
}

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
// فقط هذا الدالة تنطينا مجموع كل قيمة متكرره بداخل المصفوفة Count هذه الدالة تشبه دالة
$allNames = ['ahmed', 'ali', 'ahmed', 'onur', 'ali'];
$totalCounts = array_count_values($allNames);
//print_r($totalCounts);

// 10 - array_flip()
// بستخدام هذه الدالة نستطيع عكس قيم المصفوفة بالمفاتيح
// (indexs)
$people = ['Abdulrahman' => 'abdo@gmail.com', 'Mustafa' => 'musti@hotmail.com'];

$arrFlip = array_flip($people);

// 11- array_key_exists()
// بستخدام هذا الدالة نستطيع نتاكدهل القيمة موجودة داخل المصفوفة
//
if (array_key_exists('Abdulrahman', $people)) {
    // echo 'Yes it exists';
} else {
    // echo 'No, it dose not';
}

// 12- array_map()
// تعتبر من الدوال المهمة باللغه كلها واكثرها استخداما
// هذه دالة تاخذ معطيين
// Callback  :الاول
// ويعني دالة نعملها بنفسنا لعملية ما ونمررها بداخل هذه الدالة وتتنفذ اكثر من مرره
// الثاني: مصفوفة
//  Array Map وبالنهاية تقوم دالة
// ياخذ المصفوفة ويرجع مصفوفة جديدة على الاساس المصفوفة الاولى + العملية بداخل الدالة الي عرفناها

$arrNumbers = [1, 2, 3, 4, 5, 6]; // المصفوفة

// الدالة: قريبا نتعرف على الدوال ان شاء الله
function multiplyByTwo($item)
{
    return $item * 2;
}

// نمرر اسم الدالة مع المصفوفة حتى نحصل على مصفوفة جديدة بنفس عدد المصفوفة الاولى فقط بقيم جديدة
$arrTotal = array_map('multiplyByTwo', $arrNumbers);
//  print_r($arrTotal);

// 13 - array_filter()
//  دالة الفلتره تعمل نفس دالة قبلها, فقط هذا تستخدم للفلترة المصفوفة حسب الشرط او العملية نحتاجها داخل الدالة
// اللتي نعرفها يدوية وايضا تعتبر من الدوالة المهمة

function filterArray($a)
{
    return $a > 1 && $a < 6;
}

$totalNumbers = array_filter($arrNumbers, 'array_filter');
//print_r($totalNumbers);

// 14 - array_merge()
// وضيفة هذه الدالة تدمج اكثر من دالة مع بعضها ونحصل على دالة جديدة
$person1 = ['Afnan'];
$person2 = ['Abdulrahman'];
$merge = array_merge($person1, $person2);
// print_r($merge);

// 15 - array_rand()
// هذه الدالة نستخدمها عندما نريد نختار قيم عشوائية بداخل مصفوفة عن طريق تمرير المصفوفة وعدد القيم الي نريدها
$arrRand = array_rand($arrNumbers, 3);
// print_r($arrRand);

// 16 - array_reverse()
// هذه الدالة تغير اماكن القيم الموجودة بداخل المصفوفة بالعكس
$arrPeople = ["Abdulrahman", "Ali", "Afnan", "Nael"];
$reverseArr = array_reverse($arrPeople);
// print_r($reverseArr);

// 17 - array_search()
// دالة البحث تعتبر ايضا من الدوال مهمه,
// من خلاله نستطيع بحث عن قيم معينة بداخل مصفوفة ودائما يرجع النا مفتاح اول نتيجه فقط
// key
$searchKey = array_search("Afnan", $arrPeople);
//echo $searchKey;

// 18 - array_keys()
// نفس دالة البحث, فقط هذه الدالة يرجع اكثر من نتيجة في حالة اذا كان القيمة متكررة
$searchMultipleKeys = array_keys($arrPeople, "Abdulrahman");
//print_r($searchMultipleKeys);

// 19 - array_shift()
// هذه الدالة تمسح القيمة الاولى بداخل المصفوفة
$firstValue = array_shift($arrPeople);
//echo $firstValue;

// 20 - array_pop()
// هذه الدالة تحذف القيمة الاخيره بداخل المصفوفة
$lastValue = array_pop($arrPeople);
//echo $lastValue;

// 21 - array_slice()
// هذه الدالة ايضا تعتبر من الدوال المهمة, بحيث نستطيع استرجاع قمية من اي مكان او نقطة نريدها
$arrAllNumber = [20, 30, 200, 30, 192, 283];
// الثاني index نريد استرجاع كل القيم بداخل المصفوفة من نقطة اي
$slicedValues = array_slice($arrAllNumber, 2);
//print_r($slicedValues);

// وايضا نستطيع نحدد عدد القيم الي نريدها
// الثالث index نريد استرجاع قيمتين من نقطة اي
$slicedInBetween = array_slice($arrAllNumber, 3, 2);
//print_r($slicedInBetween);

// 22 - array_sum()
// نستخدم هذه الدالة المصفوفة لجمع قيم الموجودة بداخل المصفوفة اكيد يجب ان يكون القيم ارقام
$totalSum = array_sum($arrAllNumber);
//echo $totalSum;

// 23 - array_product()
// نستخدم هذه الدالة المصفوفة لضرب قيم الموجودة بداخل المصفوفة اكيد يجب ان يكون القيم ارقام
$multiply = array_product($arrAllNumber);
//echo $multiply;

// 24 - array_unique()
// هذه الدالة ايضا من دوال المهمة, نستخدمها عندما نريد اي نمسح القيم المتكرره بدال المصفوفة
$removeDuplicates = array_unique($arrAllNumber);
//print_r($removeDuplicates);

// 25 - array_values()
// هذه الدالة نستخدمها لاسترجاع فقط القيم من المصفوفة
//$arrayValue = array("size" => "XL", "color" => "gold");
// or this way
$arrayValue = ["size" => "XLL", "color" => "gold"];
print_r(array_values($arrayValue));

// 26 - array_push()
//وهذه الدالة اكثر استخدامها في حالة اضافة قيمة او اكثر في بنهاية المصفوفة
//array_push($arrAllNumber, 91,29,40,200);
//print_r($arrAllNumber);

// او بهذه الطريقة
// or this way;
$arrAllNumber[2] = 1; // if we want to override لاستبدال القيمة القديمة
$arrAllNumber[] = 999; // if we want to add new value onto array لاضافة قيمة جديد بهاية المصفوفة
//print_r($arrAllNumber);
