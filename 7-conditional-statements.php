<?php
// if Statement: اداة الشرطية
// نستخدمها للتاكد من شرط معين لعمل عملية معينة ولها عده استخدامات

// حالة اولى
// لتاكد من شرط واحد اذا صح ينفذ الكود بداخل الاقواس

$n = 20;
if ($n == 20) {
    //echo 'yes its equal';
}
// if else الحالة الثانية وتسمى بال
// في حالة الشرط الاول اذا ماتحقق ينفذ الكود بداخل
// else

if ($n == 10) {
    //echo 'n is equal to 10';
} else {
    //echo 'n is not equal to 10';
}

// Nested If الحالة الثالثة وتسمى بال
// اي يعني نستطيع التاكد من عده شروط في ان واحد مثل ماموجود بالمثال

if ($n > 10) {
    if ($n < 30) {
        if ($n === 20) {
            //echo "Number is passed";
        }
    }
}
/* 
    Arithmetic Operators المعاملات الحسابية 
    +, -, *, /, %, **, ++, --

    modulus (%) باقي القسمة 
    نستخدمها مثلا في حالة التاكد من الرقم هل هو فردي او زوجي   
  */

$a = 8;
if (($a % 2) == 1) {
    // echo "$a is odd." ;
}

if (($a % 2) == 0) {
    // echo "$a is even." ;
}

/*
    # Comparison Operators المعاملات المقارنة
    == , === (المعامل ثلاثي المساواة), !=, <> , !== ,< ,> ,<= ,>= 
  */
/* is true 0 == '0' ignoring data type
    هذا الشرط صح لان علامة يساوي يقارن القيم فقط ويهمل نوع المتغير
    ولهذا الاثنين متساوين بالقيم
  */
//var_dump(0 == '0');

/*
    لكن أحياناً نحتاج تحقق كلاً من مساواة القيمة ونوع البيانات لذلك يستخدم المعامل ثلاثي المساواة 
    ( === )
    نتيجة فحصص تحقق المساواة أن المساواة غير صحيحة
    ( FALSE ) لأنهم مساويان في القيم ومختلفان في نوع البيانات.
  */
// var_dump(0 === '0'); // false

/*
   != نفس الحالة مع
  */
// var_dump(0 != '0'); // هذا الشرط لايتحقق لان متساوين بالقيم
// var_dump(0 !== '0'); // اما في هذا الحالة الشرط يتحقق لانهم مختلفان بنوع البيانات

/* 
    Logical Operators | المعاملات المنطقية
      1- and, AND , &&  يساوي 1 اذا كان جميع أطراف المعامل يساوي قيمة صحيحة
      2- or, OR , || او يساوي  1 اذا كان هناك طرف واحد علي الاقل يساوي قيمة صحيحة.
      
      3- xor, XOR
      exclusive or (حصراً أو)
      على الاقل لازم واحد من الشرطين صحيح اما اذا كان الشرطين صحيحا تعطي 
      false

    Operators لمعرفة المزيد على انواع 
    http://php.net/manual/en/language.operators.php
  */

$username = 'ahmed';
$password = 12345;

if ($username == 'ahmed' && $password === '12345') {
    //print("Welcome back!");
} else {
    // print("Invalid Login Detected");
}

$total_spent = 100;
$special_key = 'SK12345';

if ($total_spent == 100 || $special_key == 'SK12345') {
    //print("Discount Granted!");
} else {
    //print("No discount for you!");
}

$contestant_one = true;
$contestant_two = false;

if ($contestant_one xor $contestant_two) {
    // print("Only one winner!");
} else {
    // print("Both can't win!");
}

// Switch Statment السويتش
// اي يعني شرط بداخل شرط بداخل شرط ويستمر حالة Nested If تشبه ال
// ولكن السويتش ارتب من هالمتاهه

$page = 'Services';
// if ($page == "Home") echo "You chose Home Page";
// elseif ($page == "About") echo "You chose About Page";
// elseif ($page == "Contact") echo "You chose Contact Page";

// استخدمها مع النصوص
// switch ($page) {
//   case 'Home':
//     echo 'You chose Home Page';
//     break;
//   case 'About':
//     echo 'You chose About Page';
//     break;
//   case 'Contact':
//     echo 'You chose Contact Page';
//     break;
//   default:
//     echo 'Sorry we dont know your visted page';
//     break;
// }

// استخدمها مع الارقام
// $i = 2;
// switch ($i) {
//   case 0:
//     echo "i equals 0";
//     break;
//   case 1:
//     echo "i equals 1";
//     break;
//   case 2:
//     echo "i equals 2";
//     break;
// }

$ten = 40;

// ونستطيع تحقق من عده حالات في ان واحد
// switch ($ten) {
// case 1:
// case 4:
// case 10:
//   echo 'Its the right number';
//   break;
// default:
//   echo 'wrong number';
//   break;
// }

// Shorthand If/Else Using Ternary Operators (?:)
/* basic usage */
$number = 20;

$firstName = 'Ahmed';
$message = 'Hello ' . ($number === 20 ? $firstName : 'Guest');
echo $message;

// $age = 10;
// $score = 60;

// echo 'you are: ',($age > 10 ? ($score < 80 ? 'behind' : 'above average') : ($score < 50 ? 'behind' : 'above average')); // returns 'You are behind'
