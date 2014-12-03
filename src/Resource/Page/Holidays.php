<?php


namespace Japaneseholiday\Api\Resource\Page;


use BEAR\Resource\Renderer\JsonRenderer;
use BEAR\Resource\ResourceObject;
use BEAR\Sunday\Inject\ResourceInject;

class Holidays extends ResourceObject
{
    use ResourceInject;

    public function onGet($year)
    {
        $this['holidays'] = $this->resource->get->uri('app://self/holidays')->withQuery(['year' => $year])->eager->request($year);

        $this->setRenderer(new JsonRenderer($this));

        return $this;
    }
}
