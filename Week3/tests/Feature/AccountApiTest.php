<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AccountApiTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    use RefreshDatabase;

    public function test_can_create_account(): void
    {
        $data = [
            'name' => 'Test',
            'balance' => 100,
            'currency' => 'PLN'
        ];
        $response = $this->postJson('/api/v1/accounts', $data, [
            'X-API-KEY' => 'secret123'
        ]);

        $response->assertCreated();
        $this->assertDatabaseHas('accounts', [
            'name' => 'Test'
        ]);
    }


    public function test_cannot_create_account_with_invalid_data(): void
    {
        $data = ['balance' => -100];
        
        $response = $this->postJson('/api/v1/accounts', $data, ['X-API-KEY' => 'secret123']);

        $response->assertUnprocessable();
        $response->assertJsonValidationErrors(['name', 'balance', 'currency']);
    }

}
