<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // جمع البيانات المرسلة من النموذج
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // إعداد البريد الإلكتروني
    $to = "MazanF15@hotmail.com"; // استبدل هذا بالبريد الإلكتروني الخاص بك
    $headers = "From: " . $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // تنسيق الرسالة
    $body = "<html><body>";
    $body .= "<h2>رسالة جديدة من نموذج الاتصال</h2>";
    $body .= "<p><strong>الاسم:</strong> $name</p>";
    $body .= "<p><strong>البريد الإلكتروني:</strong> $email</p>";
    $body .= "<p><strong>الموضوع:</strong> $subject</p>";
    $body .= "<p><strong>الرسالة:</strong></p>";
    $body .= "<p>$message</p>";
    $body .= "</body></html>";

    // إرسال البريد الإلكتروني
    if (mail($to, $subject, $body, $headers)) {
        echo "<p style='color: green;'>تم إرسال رسالتك بنجاح!</p>";
    } else {
        echo "<p style='color: red;'>حدث خطأ أثناء إرسال الرسالة، يرجى المحاولة مرة أخرى.</p>";
    }
}
?>
