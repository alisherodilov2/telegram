<?php

namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;

class Story extends Objects
{
    public function getId()
    {
        return $this->getValue('id');
    }

    public function getChat()
    {
        return new Chat($this->getValue('chat'));
    }
}