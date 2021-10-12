<?php

namespace Test;

use TripSorter\Locations\Airport;
use TripSorter\Transports\BusTicket;
use TripSorter\TripSorter;

include __DIR__ . '/vendor/autoload.php';

$trips = TripSorter::fromCards(
    new BusTicket(new Airport('B'), new Airport('D'), 4),
    new BusTicket(new Airport('N'), new Airport('A'), 2),
    new BusTicket(new Airport('A'), new Airport('B'), 3),
    new BusTicket(new Airport('D'), new Airport('O'), 5),
    new BusTicket(new Airport('M'), new Airport('N'), 1),
);

echo $trips->description("\n")->value;
