<?php


namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;

class MessageEntity extends Objects
{
    public function getType()
    {
        return $this->getValue('type');
    }

    public function getOffset()
    {
        return $this->getValue('offset');
    }

    public function getLength()
    {
        return $this->getValue('length');
    }

    public function getUrl()
    {
        return $this->getValue('url');
    }

    public function getUser()
    {
        return new User($this->getValue('user'));
    }

    public function getLanguage()
    {
        return $this->getValue('language');
    }

    public function getCustomEmojiId()
    {
        return $this->getValue('custom_emoji_id');
    }
}