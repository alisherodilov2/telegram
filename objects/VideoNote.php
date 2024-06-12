<?php

namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;
use ustadev\telegram\traits\FileAttributes;

class VideoNote extends Objects
{
    use FileAttributes;

    public function getLength()
    {
        return $this->getValue('length');
    }

    public function getDuration()
    {
        return $this->getValue('duration');
    }
}