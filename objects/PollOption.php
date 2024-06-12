<?php

namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;

class PollOption extends Objects
{
    public function getText()
    {
        return $this->getValue('text');
    }

    public function getVoterCount()
    {
        return $this->getValue('voter_count');
    }
}