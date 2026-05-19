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
        return 'Form submission will be handled here.';
    }

    public function show(OilCheck $oilCheck)
    {
        return "Result page for oil check #{$oilCheck->id}.";
    }
}
