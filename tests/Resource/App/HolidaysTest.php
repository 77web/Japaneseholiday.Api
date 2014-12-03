<?php


namespace Japaneseholiday\Api\Resource\App;


use Japanese\Holiday\Entity\Holiday;

class HolidaysTest extends \PHPUnit_Framework_TestCase
{
    public function test_onGet()
    {
        $year = 2014;
        $repository = $this->getMock('\Japanese\Holiday\Repository');
        $holiday1 = new Holiday(new \DateTime('2014-01-01'), 'test1');
        $holiday2 = new Holiday(new \DateTime('2014-01-31'), 'test2');
        $holidays = [$holiday1, $holiday2];
        $repository
            ->expects($this->once())
            ->method('getHolidaysForYear')
            ->with($year)
            ->will($this->returnValue($holidays))
        ;

        $resource = new Holidays($repository);
        $result = $resource->onGet($year);

        $this->assertCount(2, $result->body);
        $this->assertArrayHasKey('name', $result->body[0]);
        $this->assertArrayHasKey('date', $result->body[0]);
    }

}
