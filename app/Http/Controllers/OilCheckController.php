<?php

namespace App\Http\Controllers;

use App\Models\OilCheck;
use Illuminate\Http\Request;

class OilCheckController extends Controller
{
    public function create()
    {
        return view('oil-checks.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'current_odometer' => ['required', 'integer', 'min:0', 'gte:previous_odometer'],
            'previous_odometer' => ['required', 'integer', 'min:0'],
            'previous_oil_change_date' => ['required', 'date', 'before:today'],
        ]);

        $oilCheck = OilCheck::create($validated);

        return redirect()->route('oil-checks.show', $oilCheck);
    }

    public function show(OilCheck $oilCheck)
    {
        return "Result page for oil check #{$oilCheck->id}.";
    }
}
