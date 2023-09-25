<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $text = $_POST["text"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $to = "goldin.m86@ukr.net"; // Замените на вашу электронную почту
    $subject = "Новая форма от " . $name;
    $message = "Имя: " . $name . "\n\n" .
               "Текст: " . $text . "\n\n" .
               "Email: " . $email . "\n\n" .
               "Телефон: " . $phone;

    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Сообщение успешно отправлено.";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Отримання даних з форми
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $text1 = $_POST['text1'];
    $text2 = $_POST['text2'];
    $textarea = $_POST['textarea'];

    // Адреса електронної пошти, на яку будуть надіслані дані форми
    $to = 'your-email@example.com';

    // Тема листа
    $subject = 'Нова форма з сайту';

    // Підготовка тіла листа
    $message = "Ім'я: " . $name . "\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Телефон: " . $phone . "\n";
    $message .= "Текст 1: " . $text1 . "\n";
    $message .= "Текст 2: " . $text2 . "\n";
    $message .= "Текстова область: " . $textarea . "\n";

    // Відправка листа
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'Дякуємо! Ваша форма була успішно надіслана.';
    } else {
        echo 'Під час відправки форми сталася помилка. Будь ласка, спробуйте знову.';
    }
}
?>

