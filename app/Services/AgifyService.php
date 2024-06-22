<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AgifyService
{
    protected string $url;

    public function __construct()
    {
        $this->url = config('services.agify.url');
    }

    /**
     * Gets a age by a name
     */
    public function getAgeByName(string $name)
    {
        try {
            $response = Http::withoutVerifying()->get($this->url, ['name' => $name]);

            if ($response->successful()) {
                // API Request was successfull
                return $response->json();
            }

            // API Request was unsuccessful
            Log::error('Agify API response unsuccessful.');
            return null;
        } catch (\Exception $e) {
            Log::error('Error fetching age data: ' . $e->getMessage());
            return null;
        }
    }
}
