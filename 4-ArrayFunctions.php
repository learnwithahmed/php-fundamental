<?php

# 7- Most useful array functions - Important
// دوال مهمة يمكننا استخدامها مع المصفوفة 

  # 1- print_r()
  # 2- var_dump()
  
  # 3- explode()
  // بستخدام هذا الدالة, نستطيع نحول اي نص  الى مصفوفة بستخدام 
  // كيف: نفرض عدنا نص وهذا النص طويل بس بين كل كلمة وكلمة اكو رمز مثل خط مائل او فارزة
  // نمرر هذا النص والرمز المتكرر للدالة ويقوم بتحويلها للموصفة
  
  $string1 = 'Nael|Onur|Afnan';
  $arr = explode('|', $string);
  print_r($arr);

  $string2 = 'Mustafa,Ammar,Rana';
  $arr2 = explode(',', $string2);
  print_r($arr2);

  // 4- implode()
  // هذه الدالة  تعمل نفس الاول فقط يقوم يتحويل المصفوفة لنص
  $arr3 = ['Nael', 'Afnan', 'Mustafa'];
  echo implode(', ', $arr3);

  // 5- count()
  // هذه الدالة تطبع النه حجم المصفوفة بالرقم
  echo count($arr3);

  // 6 - is_array()
  // هذه الدالة كثير مفيدة في حالة تاكد من شرط معين مثلا هل المتغير عباره عن دالة ام لا
  if(is_array($arr3)) {
    echo 'Yes, its an array';
  }

  // 7- shuffle()
  // هذه الدالة تقوم بتغير ترتيب القيم الموجودة بالدالة عشواية
  shuffle($arr3);
  print_r($arr3);

  // 8 - array_combine()
  // بستخدام هذه الدالة نستطيع دمج مصفوفتين, نفرض عدنا مصفوفة الاولى فقط بس الاندكس 
  // والثانية نفرضها قيم
  $indexs = ['firstName', 'lastName'];
  $values = ['Nael', 'Muhammed'];
  // نمرر الاثنين, ويطلع النه مصفوفة جديدة بيها الاندكس والقيم
  $names = array_combine($indexs, $values);
  print_r($names);

  // 9 - array_count_values()
  // فقط هذا الدالة تنطينا مجمود كل قيمة متكرره بداخل المصفوفة Count هذه الدالة تشبه دالة
  $allNames = ['ahmed', 'ali', 'ahmed', 'onur', 'ali'];
  $totalCounts = array_count_values($allNames);
  print_r($totalCounts);


?>