<?php


namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;

class WebAppData extends Objects
{
    public function getData()
    {
        return $this->getValue('data');
    }

    public function getButtonText()
    {
        return $this->getValue('button_text');
    }
}