<?php
// تفعيل عرض الأخطاء لضمان ظهور المشكلة حتى لو كان هناك "die"
ini_set('display_errors', 1);
error_reporting(E_ALL);

// create db connection
// تأكد من أن هذه المعلومات صحيحة
$serverName = "localhost";
$userName = "root";
$password = ""; // إذا كنت تستخدم XAMPP/MAMP، يجب أن تكون فارغة
$dbName = "exams";

$conn = new mysqli($serverName, $userName, $password, $dbName);

if($conn->connect_error) {
    // هذه المرة سنقوم بعرض رسالة الخطأ بوضوح شديد ثم التوقف
    echo "<h1>❌ خطأ حاسم في الاتصال بقاعدة البيانات ❌</h1>";
    echo "<p><strong>سبب المشكلة:</strong> " . $conn->connect_error . "</p>";
    echo "<p>الرجاء التأكد من تشغيل MySQL في XAMPP وأن بيانات الدخول صحيحة.</p>";
    exit(); // إيقاف التنفيذ بعد عرض الرسالة
}
// إذا نجح الاتصال، فإن الكود سيستمر بشكل طبيعي
?>