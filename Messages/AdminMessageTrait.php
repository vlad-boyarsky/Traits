<?php

trait AdminMessageTrait
{
    public function sendAdminMessage($name)
    {
        echo "Hello admin: $name";
    }
}