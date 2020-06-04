<?php

namespace Cdro\TelegramBot2FA\Responder;

use Cdro\TelegramBotCore\Responder\AbstractResponder;

class SsoRegistrationResponder extends AbstractResponder
{
    public function removed(\stdClass $message)
    {
        $this->client->sendMessage(
            $this->getMessageId($message),
            sprintf(
                'Hello %s %s, you have been succesfully removed form our user base.',
                $message->from->first_name,
                $message->from->last_name
            )
        );
    }

    public function newlyRegistered(\stdClass $message)
    {
        $this->client->sendMessage(
            $this->getMessageId($message),
            sprintf(
                'Hello %s %s, you are now able to receive 2FA token through Telegram.',
                $message->from->first_name,
                $message->from->last_name
            )
        );
    }
}