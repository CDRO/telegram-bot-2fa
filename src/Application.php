<?php

namespace Cdro\TelegramBot2FA;

use \Cdro\TelegramBotCore\Client\Client;
use \Cdro\TelegramBotCore\Registry\BasicRegistry;
use \Cdro\TelegramBotCore\Helper\WebhookRegistry;
use \Cdro\TelegramBotCore\Security\SimpleLayer as SecurityLayer;

class Application
{

    /**
     *
     */
    public function __construct(Client $client callable $securityLayerCallback)
    {
        (new SecurityLayer)->check($securityLayerCallback);

        $this->client = $client;
        $this->registry = (new BasicRegistry($client, dirname(__DIR__) . '/static.json'))->load();
    }

    /**
     * Run the Application
     *
     */
    public function runWebhook()
    {
        (new WebhookRegistry($this->registry))->handle();
    }
}
