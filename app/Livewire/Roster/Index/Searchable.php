<?php

namespace App\Livewire\Order\Index;

trait Searchable
{
    public $search = '';

    public function updatedSearchable($property)
    {
        if ($property === 'search') {
            $this->resetPage();
        }
    }

    protected function applySearch($query)
    {
        return $this->search === ''
            ? $query
            : $query->where(function ($query) {
                $query->where('email', 'like', "%{$this->search}%");
            });
    }
}
