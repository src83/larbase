<?php

declare(strict_types=1);

namespace App\Modules\Test\DTO;

/**
 * @internal
 * @example
 *
 * Example DTO used only for documentation and demos.
 * Not part of application domain.
 */
final readonly class TestDto
{
    public function __construct(
        public int $id,
        public string $name,
    ) {}
}
