<?php


namespace Japaneseholiday\Api\Resource\App;


class HolidaysTest extends \PHPUnit_Framework_TestCase 
{
    public function test_onGet()
    {
        $resource = new Holidays();
        $result = $resource->onGet(2014);

        $this->assertEquals([], $result->body);
    }
}
