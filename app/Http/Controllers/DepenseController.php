<?php

namespace App\Http\Controllers;

use App\Models\Depense;
use Illuminate\Http\Request;

class DepenseController extends Controller
{
    public function index()
    {
        $depenses = Depense::all();
        return view('depenses.index', compact('depenses'));
    }

    public function create()
    {
        return view('depenses.create');
    }

    public function store(Request $request)
    {
        Depense::create($request->all());
        return redirect()->route('depenses.index');
    }

    public function destroy(Depense $depense)
    {
        $depense->delete();
        return back();
    }
}