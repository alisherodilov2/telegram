<?php

namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;

class PhotoSize extends Objects
{

    public function getFileId()
    {
        return $this->getValue('file_id');
    }

    public function getFileUniqueId()
    {
        return $this->getValue('file_unique_id');
    }

    public function getWidth()
    {
        return $this->getValue('width');
    }

    public function getHeight()
    {
        return $this->getValue('height');
    }

    public function getFileSize()
    {
        return $this->getValue('file_size');
    }
}

