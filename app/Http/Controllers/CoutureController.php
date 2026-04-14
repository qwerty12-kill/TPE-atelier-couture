<?php

namespace App\Http\Controllers;

use App\Models\Couture;
use App\Models\Client;
use App\Models\Agent;
use Illuminate\Http\Request;

class CoutureController extends Controller
{
    public function index()
    {
        $coutures = Couture::with('client', 'agent')->get();
        return view('coutures.index', compact('coutures'));
    }

    public function create()
    {
        $clients = Client::all();
        $agents = Agent::all();
        return view('coutures.create', compact('clients', 'agents'));
    }

    public function store(Request $request)
    {
        Couture::create($request->all());
        return redirect()->route('coutures.index');
    }

    public function edit(Couture $couture)
    {
        $clients = Client::all();
        $agents = Agent::all();
        return view('coutures.edit', compact('couture', 'clients', 'agents'));
    }

    public function update(Request $request, Couture $couture)
    {
        $couture->update($request->all());
        return redirect()->route('coutures.index');
    }

    public function destroy(Couture $couture)
    {
        $couture->delete();
        return redirect()->route('coutures.index');
    }
}