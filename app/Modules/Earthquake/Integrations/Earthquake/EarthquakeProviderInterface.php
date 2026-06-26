<?php

declare(strict_types=1);

namespace App\Modules\Earthquake\Integrations\Earthquake;

use Illuminate\Support\Collection;

interface EarthquakeProviderInterface
{
    public function getEvents(): Collection;
}
