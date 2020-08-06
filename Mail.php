<?php

require_once "Messages/UserMessageTrait.php";
require_once "Messages/ClientMessageTrait.php";
require_once "Messages/AdminMessageTrait.php";

class Mail
{
    use UserMessageTrait, ClientMessageTrait, AdminMessageTrait;

    private string $mainMessage;

    public function __construct(string $mainMessage)
    {
        echo $this->mainMessage = $mainMessage;
    }
}
