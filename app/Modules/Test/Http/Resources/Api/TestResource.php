<?php

declare(strict_types=1);

namespace App\Modules\Test\Http\Resources\Api;

use App\Http\Resources\Api\BaseResource;

/**
 * Example API resource.
 *
 * Used for documentation and demo purposes.
 */
final class TestResource extends BaseResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
        ];
    }
}
