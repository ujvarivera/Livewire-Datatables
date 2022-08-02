<?php

namespace App\Http\Livewire;

use App\Models\Contract;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ContractsTable extends LivewireDatatable
{
    public $model = Contract::class;
    public $contractNumbers;
    public $exportable = true;
    public $complex = true;

    public function columns()
    {
        return [
            NumberColumn::name('id')
            ->label('ID'),
    
            Column::name('contract_number')
            ->searchable()
            ->hideable()
            //->filterable(['SvFjsEnV', 'ke1YitGh']),
            ->filterable($this->contractNumbers),
            
            Column::name('description')
                ->label('description')
                ->searchable()
                ->hideable()
                ->filterable(),

            BooleanColumn::name('active')
                ->label('active')
                ->filterable(),
    
            DateColumn::name('expiration_date')
                ->label('expiration_date')
                ->filterable() 
        ];

    }
}