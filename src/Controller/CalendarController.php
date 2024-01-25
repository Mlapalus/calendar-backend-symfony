<?php

namespace App\Controller;

use App\Factory\CalendarFactory;
use App\Model\Event;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


#[Route(path: "/calendar", name: "calendar_")]
class CalendarController
{
    #[Route(path: "", name: "all", methods: ["GET"])]
    function all(): Response
    {
        $now = new \DateTimeImmutable();
        $event = new Event();
        $calendar = CalendarFactory::create(
            $now->getTimestamp(),
            "test",
            1,
            [$event]
        );
        $calendar->setId(1);

        $data = [$calendar->asArray()];

        return new JsonResponse($data, 200, ["Content-Type" => "application/json"]);
    }
}