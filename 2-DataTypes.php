<?php 

# Data Type | انواع المتغيرات
  #1- String | نص;
  $text = 'Some text goes here';

  #2- Integers | ارقام
  $number = 10;

  #3- Booleans a) True; b) False; | القيم المنطقية
  $isAvaiable = false;

  #4- Float | القيم العشرية
  $price = 1.2;

  #5- NULL 
  # القيمة الصفرية او المعدومة وتستخدم مجازا عن شيء ماعنده قيمة او شيء
  $nullValue = null;

  # 6- Constant | ثوابت بستخدام دالة دفاين
  
  define('NAME', 'Onur'); # المعطى الاولى اسم المتغير والثانية قيمة المتغير
  // echo NAME; # وعن الطبع المغير بهذا الطريقة
  // echo name; # وليس بهذه الطريقة

  // To make it ignore case sensetive, we pass third params as True
  // واذا ردنا نهمل حالة الحرف اي يعني نطبعها بستخدام الحرف الصغيره
  // true نممر معطى ثالث لدالة الدفاين ب
  define('NAME', 'Onur', true); 
  echo name; // بهذه الطريقة

  # 7- Array | المصفوفات
  /*
    we have three types of array:
    1- Indexed
    2- Associative
    3- Multi-Dimensional
  */

  #indexed
  // نعرف المتغير كمصفوفة اما بهذا الشكل بستخدام دالة المصفوفة
  //we define array using array function;
  $_cities1 = array('Kirkuk', 'Baghdad', 'Musul', 10); 
  
  // او باستخدام اقواس المجموعه
  // we define array using brackets;
  $_cities = ['Kirkuk', 'Baghdad', 'Musul', 10]; 
  
  // we can append to end of array new value
  // نستطيع اضافة قيم جديدة للمصفوفة بستخدام اخر اندكس بداخل المصفوفة
  $_cities[5] = 'Erbil';

  // واذ لمن تكن تعرف اخر اندكس, بستخدام اقواس فارغة بدون اندكس
  $_cities[] = 'Basrah'; 

  // ولطبع اي قيمة بالمصفوفة فقط نكتب اسم المصفوفة ونضيف رقم الاندكس اي يعني رقم موقع القيمة
  echo $_cities[0];

  // Prints human-readable variable
  // او لطبع المصفوفة باكملها يمكنا استخدام دالة الطبع وتكون على شكل قابل للفهم
  print_r($_cities); 

  // this is useful for debugging purpose;
  // او بستخدام دالة الدمب, ويعطينا النتجية بالتفصيل اي يعني الهيكيلة كاملة للمصفوفة
  var_dump($_cities); 

  #Associative Type;
  // نوع الثاني من المصفوفة يمكننا اعادة كتابة الاندكس يدويا
  // اي بدال ما المصفوفة تحدد الموقع للقيمة بداخل المصفوفة, نكتبها حسب مانريد
  $_students = array('Afnan' => 30);
  echo $_students['Afnan'];
  
  // نفس الحالة من نريد نغير القيمة في موقع معين;
  $_students['Afnan'] = 40;
  echo $_students['Afnan'];

  // او اضافة قيم جديدة لموقع جديد
  $_students['Nael'] = 100;
  echo $_students['Nael'];

  $_students[20] = 'Onur';
  echo $_students[20];

  # Multi-Dimensional Array
  // نوع الثالث هو متعدد الابعاد, اي يعني مصفوفة بداخل مصفوفة
  $cars  = array(
    array('BMW', 100, 40),
    array('Toyota', 10, 3),
    array('Hounda', 70, 20),
  );
  // والطبع يكون نفس الشي, اول شيونضيف رقم اندكس اول موقع
  //  للمصفوفة وبعدين الموقع الي بيها القيمة بداخل المصفوفة الثانوية
  echo $cars[2][2]; // اهنا نريد نطبع رقم عشرين بدال مصفوفة هوندا

?>