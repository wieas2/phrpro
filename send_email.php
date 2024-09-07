<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "algadra.ye@gmail.com";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $body = "اسم المرسل: $name\n";
    $body .= "البريد الإلكتروني: $email\n";
    $body .= "الموضوع: $subject\n";
    $body .= "الرسالة:\n$message\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "تم إرسال الرسالة بنجاح.";
    } else {
        echo "فشل إرسال الرسالة.";
    }
}
?>
</body>
</html>