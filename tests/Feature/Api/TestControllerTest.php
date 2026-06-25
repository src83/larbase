<?php

namespace Tests\Feature\Api;

use Tests\TestCase;

class TestControllerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        config(['api.is_module_available' => true]);
    }

    public function test_index_returns_list_without_pagination(): void
    {
        $response = $this->getJson('/api/test');

        $response
            ->assertOk()
            ->assertJsonStructure([
                'success',
                'http_code',
                'http_text',
                'message',
                'meta',
                'data' => [
                    '*' => ['id', 'name'],
                ],
            ]);
    }

    public function test_index_returns_list_with_pagination(): void
    {
        $response = $this->getJson('/api/test?page=1');

        $response
            ->assertOk()
            ->assertJsonStructure([
                'success',
                'http_code',
                'http_text',
                'message',
                'meta' => [
                    'paginator' => [
                        'current_page',
                        'per_page',
                        'total_items',
                        'last_page',
                        'last_item',
                        'has_next_page',
                    ],
                ],
                'data' => [
                    '*' => ['id', 'name'],
                ],
            ]);
    }

    public function test_destroy_returns_conflict_when_id_is_13(): void
    {
        $response = $this->deleteJson('/api/test/13');

        $response
            ->assertStatus(409)
            ->assertJson([
                'success' => false,
                'http_code' => 409,
            ])
            ->assertJsonPath('message.key', 'test.conflict');
    }
}
