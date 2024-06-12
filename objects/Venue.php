<?php


namespace ustadev\telegram\objects;

use ustadev\telegram\Objects;

class Venue extends Objects
{
    public function getLocation()
    {
        return new Location($this->getValue('location'));
    }

    public function getTitle()
    {
        return $this->getValue('title');
    }

    public function getAddress()
    {
        return $this->getValue('address');
    }

    public function getFoursquareId()
    {
        return $this->getValue('foursquare_id');
    }

    public function getFoursquareType()
    {
        return $this->getValue('foursquare_type');
    }

    public function getGooglePlaceId()
    {
        return $this->getValue('google_place_id');
    }

    public function getGooglePlaceType()
    {
        return $this->getValue('google_place_type');
    }
}