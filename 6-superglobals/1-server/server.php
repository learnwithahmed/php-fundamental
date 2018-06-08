<?php
  # $_SERVER SUPERGLOBAL
  /**
   *  ( Super Global Variables ) المتغيرات فوق الشاملة
   * ( PHP ) هي متغيرات مسبقة الإعداد في
   *  ( GLOBAL VARIABLES ) وتتبع خواص المتغيرات الشاملة 
   *  حيث يمكن استخدامها في أي مكان تريد.وتحتوي علي معلومات تخص البرنامج وبيئة تشغيله. 
   *  $ـSERVER  وجميع هذه المتغيرات تبدأ بعلامة (_$) مثل
   *  $ـGLOBAL ماعدا المتغير 
   *   ويجب عليك تجنب تسمية متغيرات برنامجك بأي من أسماء المتغيرات الفوق شاملة
   *  للتعرف على بقية المتغيرات 
   * http://php.net/manual/en/language.variables.superglobals.php
   */
  // Prepare all info for server
  // مثال بسيط عن متغير سرفر وكيفية الحصول على معلومات تخص السرفر 
  // http://php.net/manual/en/reserved.variables.server.php
  $server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Server Software'  => $_SERVER['SERVER_SOFTWARE'],
    'Document Root'    => $_SERVER['DOCUMENT_ROOT'],
    // useful in form, when you want to submit to the same page you are in, you can use it in action
    'Current Page'     => $_SERVER['PHP_SELF'], 
    'Script Name'      => $_SERVER['SCRIPT_NAME'],
    'Absolute Path'    => $_SERVER['SCRIPT_FILENAME'],
  ];

  // لطباعة قيمة المفتاح من داخل المصفوفة
  // echo $server['Server Software']; 
  // لطباعة المصفوفة باكملها
  //print_r($_SERVER['SCRIPT_FILENAME']);

  // Prepare info all for Client/Browser
  // مثال بسيط عن متغير سرفر ولكن هذه المره للحصول على معلومات تخص الكلاينت المتصفح او المستخدم
  $client = [
    'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP'          => $_SERVER['REMOTE_ADDR'], // return user's IP address
    'Remote Port'        => $_SERVER['REMOTE_PORT'],
  ];
  ?>