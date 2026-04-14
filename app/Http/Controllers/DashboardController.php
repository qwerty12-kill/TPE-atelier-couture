<?php

namespace App\Http\Controllers;

use App\Models\PaiementClient;
use App\Models\PaiementAgent;
use App\Models\Depense;

class DashboardController extends Controller
{
    public function index()
    {
        $entrees = PaiementClient::sum('montant');
        $depenses = Depense::sum('montant');
        $paiementsAgents = PaiementAgent::sum('montant');

        $sorties = $depenses + $paiementsAgents;
        $solde = $entrees - $sorties;

        return view('dashboard.index', compact(
            'entrees',
            'sorties',
            'solde'
        ));
    }
}