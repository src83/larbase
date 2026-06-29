<?php

declare(strict_types=1);

namespace App\Modules\Earthquake\Console\Commands;

use App\Modules\Earthquake\Services\EarthquakeService;
use Illuminate\Console\Command;

class EarthquakeUpdate extends Command
{
    protected $signature = 'earthquake:update';

    protected $description = 'Fetch and upsert earthquake events from AFAD external API';

    public function __construct(
        private readonly EarthquakeService $earthquakeService,
    ) {
        parent::__construct();
    }

    /**
     * @throws \JsonException
     */
    public function handle(): void
    {
        $status = $this->earthquakeService->eventsUpdate();

        match ($status) {
            0 => $this->info('Skipped: no new events'),
            1 => $this->info('Success'),
            2 => $this->info('Response data is empty'),
            default => $this->error('Failure'),
        };
    }
}
