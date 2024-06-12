<?php

namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;

class File extends Objects
{
    public function getFileId()
    {
        return $this->getValue('file_id');
    }

    public function getFileUniqueId()
    {
        return $this->getValue('file_unique_id');
    }

    public function getFileSize()
    {
        return $this->getValue('file_size');
    }

    public function getFilePath()
    {
        return $this->getValue('file_path');
    }
}
