<?php


namespace Japaneseholiday\Api\Resource\Page;


class HolidaysTest extends \PHPUnit_Framework_TestCase 
{
    public function test_onGet()
    {
        $resource = clone $GLOBALS['RESOURCE'];

        $page = $resource->get->uri('page://self/holidays')->withQuery(['year' => 2014])->eager->request();
        $this->assertEquals(200, $page->code);

        $json = (string)$page;
        $data = json_decode($json, true);
        $this->assertNotFalse($data);
        $this->assertArrayHasKey('holidays', $data);
        $this->assertCount(15, $data['holidays']);
    }
}
