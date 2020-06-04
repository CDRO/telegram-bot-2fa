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

define('BOT_TOKEN', $_ENV['bot_token'] ?? getenv('bot_token') ?? $_SERVER['bot_token']);
define('SAFE_TOKEN', $_ENV['safe_token'] ?? getenv('safe_token') ?? $_SERVER['safe_token']);

(new \Cdro\TelegramBot2FA\Application(
    \Cdro\TelegramBotCore\Client\Factory::getInstance(BOT_TOKEN),
    function() {
        if($_REQUEST['token'] !== SAFE_TOKEN) {
            header('Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ');
            die;
        }
    })
)->runWebhook();
