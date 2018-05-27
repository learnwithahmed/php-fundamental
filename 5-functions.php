<?php 

/*
  Functions: a block of code that can be 
  defined once and repeatedly called any where. 

  1- CamelCase - myFunction()
  2- LowerCase = my_function()
  3- PascalCase - MyFunction() mostly used with Clasess
*/

  // All of these functions are called user-defined function;

  // 1- User defined function الاعلان عن الدوال - الصيغة الافتراضية
  function displayName() {
    echo 'Ahmed';
  };

  //displayName();

  // 2- Returning value function 
  //نستطيع ايضا استرجاع ناتج النهائي من داخل الدالة بستخدام
  function multiplyNumbers($num1, $num2) {
    return $num1 * $num2;
  };

  // وبعدين نستطيع نخرج القيمة المرجعة من الدالة بداخل متغير
  //$total =  multiplyNumbers(10,2);
  //echo $total;

  // 3- Variable function

  function display() {
    echo "This is the output fo the display function";
  }

  $display='display';
  //$display();  // This will call the bar function


  // 4- Internal (in-built) function | دوال جاهزة

  // 5- Anonymous functions دوال مجهولة الاسم
  // وتكثر استخدامها بتمريرها بداخل دوال اخرى سواء تتنفذ مره واحدة او جعل الدالة تعيد استدعاء ذاتها اي الاستدعاء الذاتي
  // هذا المثال اخذناها مع دوال المصفوفة بداخل array_map()

  $_numbers = [10,29,38,47,2];
  // سواء دالةمعرفة مسبقا او دالة مجهولة ( CALLBACK FUNCTION ) دالة الماب تستقبل دالة استدعاء 
  // التي تستدعي نفسها على كل عنصر من عناصر المصفوفة Callback بحيث يتم تطبيق الدالة
  
  $arrTotal = array_map(function($number) {
    return $number * 2;
  }, $_numbers);

  // Pass args to function
  function displayUserName($name) {
    echo $name;
  };

  //displayUserName();

  // Function with Default Value
  function showName($name = 'Ahmed') {
    echo $name;
  };
  showName('Afnan');


