<?php

namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;

class Dice extends Objects
{
    public function getEmoji()
    {
        return $this->getValue('emoji');
    }

    public function getVal()
    {
        return $this->getValue('value');
    }
}