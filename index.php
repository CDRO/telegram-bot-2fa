<?php

$autoloads = [
    'vendor/autoload.php',
    dirname(dirname(__DIR__)) . '/vendor/autoload.php'
];
foreach($autoloads as $autoload) {
    if(file_exists($autoload)) {
        require $autoload;
        break;
    }
}

(new \Cdro\TelegramBot2FA\Application(
    \Cdro\TelegramBotCore\Client\Factory::getInstance(BOT_TOKEN)
    )
)->runWebhook();
