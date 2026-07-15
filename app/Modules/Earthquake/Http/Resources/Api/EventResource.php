<?php

declare(strict_types=1);

namespace App\Modules\Earthquake\Http\Resources\Api;

use App\Http\Resources\Api\BaseResource;

final class EventResource extends BaseResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'location' => $this->resource->location,
            'magnitude' => $this->resource->magnitude,
        ];
    }
}
