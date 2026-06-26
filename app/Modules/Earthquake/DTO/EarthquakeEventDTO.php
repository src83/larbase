<?php

declare(strict_types=1);

namespace App\Modules\Earthquake\DTO;

use DateTimeImmutable;

final readonly class EarthquakeEventDTO
{
    public function __construct(

        public string $eventId,
        public ?float $latitude,
        public ?float $longitude,

        public ?float $depth,
        public ?float $magnitude,
        public ?float $rms,
        public ?string $type,

        public ?string $location,
        public ?string $country,
        public ?string $province,
        public ?string $district,
        public ?string $neighborhood,

        public DateTimeImmutable $eventMoment,
        public bool $isEventUpdate,
        public ?DateTimeImmutable $lastUpdateDate = null,
    ) {}
}
