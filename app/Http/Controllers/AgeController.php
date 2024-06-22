<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AgifyService;

class AgeController extends Controller
{
    protected AgifyService $agifyService;

    public function __construct(AgifyService $agifyService)
    {
        $this->agifyService = $agifyService;
    }

    /**
     * This shows the age page
     */
    public function show(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Retrieve the name from validated data
        $name = $validatedData['name'];

        // Fetch age data from Agify API
        $ageData = $this->agifyService->getAgeByName($name);

        // Check if age data is retrieved successfully
        if ($ageData) {
            return view('age.show', compact('ageData'));
        } else {
            return back()->withErrors(['message' => 'Unable to retrieve age data. Please try again later.']);
        }
    }
}
