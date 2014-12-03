<?php

namespace Japaneseholiday\Api\Resource\Page;

use BEAR\Resource\ResourceObject;
use BEAR\Sunday\Inject\ResourceInject;

class Index extends ResourceObject
{
    use ResourceInject;

    public function onGet()
    {
        return $this;
    }
}
