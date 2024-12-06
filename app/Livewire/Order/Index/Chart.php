<?php

namespace App\Livewire\Order\Index;

use Livewire\Component;
use Livewire\Attributes\Reactive;
use Illuminate\Support\Facades\DB;
use App\Models\Store;

class Chart extends Component
{
    public Store $store;

    #[Reactive]
    public Filters $filters;

    public $dataset = [];

    public function fillDataset()
    {
        $increment = match ($this->filters->range) {
                Range::Today => DB::raw("date_format('%H', ordered_at) as increment"),
            Range::All_Time => DB::raw("date_format('%Y', ordered_at) || '-' || date_format('%m', ordered_at) as increment"),
            Range::Year => DB::raw("date_format('%Y', ordered_at) || '-' || date_format('%m', ordered_at) as increment"),
            default => DB::raw("DATE(ordered_at) as increment"),
        };

        $results = $this->store->orders()
            ->select($increment, DB::raw('SUM(amount) as total'))
            ->tap(function ($query) {
                $this->filters->apply($query);
            })
            ->groupBy('increment')
            ->get();

        $this->dataset['values'] = $results->pluck('total')->toArray();
        $this->dataset['labels'] = $results->pluck('increment')->toArray();
    }

    public function render()
    {
        $this->fillDataset();

        return view('livewire.order.index.chart');
    }

    public function placeholder()
    {
        return view('livewire.order.index.chart-placeholder');
    }
}
