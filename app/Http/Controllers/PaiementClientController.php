<?php

namespace App\Http\Controllers;

use App\Models\PaiementClient;
use Illuminate\Http\Request;

class PaiementClientController extends Controller
{
    public function store(Request $request)
    {
        PaiementClient::create($request->all());
        return back();
    }
}