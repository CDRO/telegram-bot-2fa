<?php

namespace Cdro\TelegramBot2FA;

use \Cdro\TelegramBotCore\Registry\AbstractRegistry;

class Webhook
{
    /**
     * The registry to save to
     *
     * @var AbstractRegistry
     */
    private $registry;

    public function __construct(AbstractRegistry $registry)
    {
        $this->registry = $registry;
    }


    public function handle()
    {
        $input = file_get_contents('php://input');

        $this->registry->handle($input->message);
    }
}
