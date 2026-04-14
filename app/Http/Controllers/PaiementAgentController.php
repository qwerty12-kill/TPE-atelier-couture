<?php

namespace App\Http\Controllers;

use App\Models\PaiementAgent;
use Illuminate\Http\Request;

class PaiementAgentController extends Controller
{
    public function store(Request $request)
    {
        PaiementAgent::create($request->all());
        return back();
    }
}