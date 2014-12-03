<?php

namespace Japaneseholiday\Api\Resource\App;

use BEAR\Resource\ResourceObject;

class Holidays extends ResourceObject
{
    /**
     * @param int $year
     * @return $this
     */
    public function onGet($year)
    {
        $this->body = [];

        return $this;
    }
}
