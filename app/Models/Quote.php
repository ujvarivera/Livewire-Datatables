<?php

namespace App\Models;

use Sushi\Sushi;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use Sushi;

    /*
    protected $rows = [
        ['name' => 'Lawn Mower', 'price' => '226.99'],
        ['name' => 'Leaf Blower', 'price' => '134.99'],
        ['name' => 'Rake', 'price' => '9.99'],
    ];
    */

    public function getRows()
    {
        $this->quotes = Http::get('https://type.fit/api/quotes');
        $this->quotes = collect(json_decode($this->quotes)); // arrays of objects, we need arrays of arrays to use sushi for livewire datatable

        foreach ($this->quotes as $object) {
            $arrayOfArrays[] = json_decode(json_encode($object), true);
        }

        $rows = $arrayOfArrays;
        
        return $rows;
    }
}
