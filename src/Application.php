<?php

namespace Cdro\TelegramBot2FA;

use \Cdro\TelegramBotCore\Client\Client;
use \Cdro\TelegramBotCore\Registry\AbstractRegistry;
use \CdroTelegramBotCore\Security\SimpleLayer as SecurityLayer;

class Application
{

    /**
     *
     */
    public function __construct(Client $client, AbstractRegistry $registry, callable $securityLayerCallback)
    {
        (new SecurityLayer)->check($securityLayerCallback);

        $this->client = $client;
        $this->registry = $registry;
    }

    /**
     * Run the Application
     *
     */
    public function run()
    {
        
    }
}
