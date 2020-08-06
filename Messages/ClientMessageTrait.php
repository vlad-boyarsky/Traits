<?php

trait ClientMessageTrait
{
    public function sendClientMessage($name)
    {
        echo "Hello new client: $name";
    }
}