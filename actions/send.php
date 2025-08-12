<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $company = $_POST['company'] ?? '';
    $message = $_POST['message'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';

    $text = "📌 Новое сообщение с формы:\n\n"
        . "👤 Имя: $name\n"
        . "🏢 Компания: $company\n"
        . "📩 Email: $email\n"
        . "📞 Телефон: $phone\n"
        . "✉️ Сообщение: $message";

<<<<<<< HEAD
    $botToken = getenv('TELEGRAM_BOT_TOKEN');
    $chatId = getenv('CHAT_ID');
=======
    $botToken = '8439190107:AAGjjNyC-9gSoZN7pVPNdKrfotZc9__SuO8';
    $chatId = ''; 
>>>>>>> 6c9cf93875cfe7b9102b20c7b80b085f14e5c9c4

    $url = "https://api.telegram.org/bot$botToken/sendMessage";
    $data = [
        'chat_id' => $chatId,
        'text' => $text,
    ];

    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data),
        ],
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    if ($result === false) {
        echo "Ошибка отправки в Telegram!";
    } else {
        echo "Сообщение отправлено!";
        header("Location: /");
        die();
    }
}
?>
