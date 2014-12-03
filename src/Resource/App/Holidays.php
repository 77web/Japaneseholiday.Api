<?php

namespace Japaneseholiday\Api\Resource\App;

use BEAR\Resource\ResourceObject;
use Japanese\Holiday\Repository as HolidayRepository;
use Ray\Di\Di\Inject;

class Holidays extends ResourceObject
{
    /**
     * @var HolidayRepository
     */
    private $holidayRepository;

    /**
     * @param HolidayRepository $holidayRepository
     * @Inject
     */
    public function __construct(HolidayRepository $holidayRepository)
    {
        $this->holidayRepository = $holidayRepository;
    }

    /**
     * @param int $year
     * @return $this
     */
    public function onGet($year)
    {
        $holidays = [];
        foreach ($this->holidayRepository->getHolidaysForYear($year) as $holiday) {
            /** @var \Japanese\Holiday\Entity\Holiday $holiday */
            $holidays[] = [
                'name' => $holiday->getName(),
                'date' => $holiday->getDate()->format('Y-m-d'),
            ];
        }

        $this->body = $holidays;

        return $this;
    }
}
