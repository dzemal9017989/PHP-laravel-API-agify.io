<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class AgifyService
{
    protected $url;

    public function __construct()
    {
        $this->url = config('services.agify.url');
    }

    public function getAgeByName($name)
    {
        $response = Http::withoutVerifying()->get($this->url, [
            'name' => $name,
        ]);

        return $response->json();
    }
}
