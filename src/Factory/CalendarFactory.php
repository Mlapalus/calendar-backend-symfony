<?php

namespace App\Factory;

use App\Entity\Calendar;

class CalendarFactory
{
    public static function create(
        int $createdAt,
        string $title,
        int $groupeId,
        array $events
    ): Calendar {

        $calendar = new Calendar();
        $calendar
            ->setCreatedAt($createdAt)
            ->setTitle($title)
            ->setEvents($events)
            ->setGroupeId($groupeId);

        return $calendar;
    }
}