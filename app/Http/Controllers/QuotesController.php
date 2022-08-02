<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuotesController extends Controller
{
    //private $quotes; // contains the quotes

    /*
    public function __construct()
    {
        $this->quotes = Http::get('https://type.fit/api/quotes');
        $this->quotes = collect(json_decode($this->quotes)); // arrays of objects, we need arrays of arrays to use sushi for livewire datatable
    }
    */

    public function index()
    {
        /*
        foreach($this->quotes as $object) {
            $arrayOfArrays[] = json_decode(json_encode($object), true); 
        }
        */
        //dd($arrayOfArrays);

        return view('quotes.index');
    }
}
