<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AgifyService;

class AgeController extends Controller
{
    protected $agifyService;

    public function __construct(AgifyService $agifyService)
    {
        $this->agifyService = $agifyService;
    }

    public function show(Request $request)
    {
        $name = $request->input('name');
        $ageData = $this->agifyService->getAgeByName($name);

        return view('age.show', compact('ageData'));
    }
}
