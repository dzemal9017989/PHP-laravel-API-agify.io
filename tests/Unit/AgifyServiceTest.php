<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\AgifyService;
use Illuminate\Support\Facades\Http;

class AgifyServiceTest extends TestCase
{
    protected $agifyService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->agifyService = new AgifyService();
    }

    public function test_get_age_by_name()
    {
        // Mock the HTTP response
        Http::fake([
            'https://api.agify.io*' => Http::response([
                'name' => 'John',
                'age' => 30,
                'count' => 1000,
            ], 200)
        ]);

        // Call the service method
        $response = $this->agifyService->getAgeByName('John');

        // Assert the response structure
        $this->assertIsArray($response);
        $this->assertArrayHasKey('name', $response);
        $this->assertArrayHasKey('age', $response);
        $this->assertArrayHasKey('count', $response);

        // Assert the values
        $this->assertEquals('John', $response['name']);
        $this->assertEquals(30, $response['age']);
        $this->assertEquals(1000, $response['count']);
    }

    public function test_get_age_by_name_handles_errors()
    {
    // Mock the HTTP response for an error
    Http::fake([
        'https://api.agify.io*' => Http::response(null, 500)
    ]);

    // Call the service method
    $response = $this->agifyService->getAgeByName('John');

    // Assert the response is empty or handles the error appropriately
    $this->assertNull($response);
    }

}

