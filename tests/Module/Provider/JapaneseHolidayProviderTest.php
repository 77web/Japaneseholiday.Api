<?php


namespace Japaneseholiday\Api\Module\Provider;


class JapaneseHolidayProviderTest extends \PHPUnit_Framework_TestCase 
{
    public function test_get()
    {
        $provider = new JapaneseHolidayProvider();
        $obj = $provider->get();

        $this->assertInstanceOf('\Japanese\Holiday\Repository', $obj);
    }
}
