<?php

  # 4- Concatination
  // وهي الطريقة لجمع سلستين نصيتين أو أكثر في سلسلة واحدة.
    # 1- by using single Dot
    // اول بستخدام النقطة بين الاثنين
    $firstName = 'Nael';
    $lastName = 'PHP';
    // concats without space;
    // بس هذه الطريقة يدمج الاثنين بدون مايضع اي فراغ بيهم
    echo $firstName . $lastName; 

    // concats with space; 
    // واذا ردنا نضع فراغ بيهم بهذا الشكل
    echo $firstName .' '. $lastName;
    // هذه الطرق لاتعلم لانه الزائد بذه اللغه تستخدم لعمليات حسابية مو مثل جافاسكريبت او غيرها
    //echo $firstName + $lastName; // this won't work;
    //echo '$firstName $lastName'; // this won't work;

    // هذه الطريقة تعمل بستخدام علامات الاقتباس المزدوجة;
    echo "$firstName $lastName"; // this will work;

    // وللعمليات الحسابية نستطيع استخدام بهذا الشكل
    // + - / *
    $num1 = 60;
    $num2 = 20;
    echo $num1 + $num2; // جمع
    echo $num1 - $num2; // طرح
    echo $num1 * $num2; // ضرب
    echo $num1 / $num2; // تقسيم

    // 2- Escape Character;
    // وبهذ الطريق بستخدام خط المائل نستطيع نهمل علامة الاقتباس الزائدة بداخل النص
    // هذا الحالة مفيدة لان مرات بالانكليزي من نكتب نصوص ونختصر الكلمة نضطر نستخدمها
    // بس راح يسبب النه مشكله فلازم بهذه طريقة نهملها حتى ماتاثر على الكود
    $sentence1 = 'We \'re studing'; // this works;
    // او بستخدام علامات الاقتباس المزدوجة بدون مانهمل شي ونلغي الخط المائل
    $sentence2 = "We 're going"; // this works too;
  
    
?>
