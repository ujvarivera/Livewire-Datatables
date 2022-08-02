<?php

namespace App\Http\Livewire;

use App\Models\User;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class UsersTable extends LivewireDatatable
{
    public $model = User::class;
    public $exportable = true;
    public $complex = true;

    public function columns()
    {
        return [
            
            NumberColumn::name('id')
            ->label('ID'),

            Column::name('name')
            ->defaultSort('asc')
            ->searchable()
            ->hideable()
            ->filterable(),
            
            Column::name('email')
                ->label('email')
                ->group('group1')
                ->searchable()
                ->hideable()
                ->filterable(),

            DateColumn::name('email_verified_at')
                ->label('verified_at')
                ->filterable(),

            Column::callback(['id', 'name'], function ($id, $name) {
                    return view('users.actions', ['id' => $id, 'name' => $name]);
                })->unsortable()
        ];
    }

}