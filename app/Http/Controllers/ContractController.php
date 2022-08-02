<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index()
    {
        $contractNumbers = collect(Contract::all())->pluck('contract_number');
        //dd($contractNumbers);
        return view('contracts.index', ['contractNumbers' => $contractNumbers]);
    }
}
