<?php

namespace App\Http\Livewire;

use App\Models\Quote;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class QuotesTable extends LivewireDatatable
{
    public $complex = true;
    public $model = Quote::class;

    /*
    public function builder()
    {
        // return $this->quotes; // Can't use collection here! Call to a member function getModel() on array
        return Quote::query(); // with the help of sushi package, we can use array of arrays
    }
    */

    public function columns()
    {
        return [
            Column::name('text')
            ->searchable()
            ->hideable()
            ->filterable(),

            Column::name('author')
            ->searchable()
            ->hideable()
            ->filterable($this->model::groupBy('author')->pluck('author')),
        ];
    }
}