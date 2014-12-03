<?php


namespace Japaneseholiday\Api\Module\Provider;



use Japanese\Holiday\Repository as JapaneseHolidayRepository;
use Ray\Di\ProviderInterface;

class JapaneseHolidayProvider implements ProviderInterface
{
    public function get()
    {
        $japaneseHoliday = new JapaneseHolidayRepository();

        return $japaneseHoliday;
    }
}
