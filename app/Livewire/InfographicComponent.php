<?php

namespace App\Livewire;

use App\Models\Infographic;
use Livewire\Component;
use Livewire\WithPagination;

class InfographicComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $data = Infographic::query()
            ->orderBy('date', 'desc')
            ->paginate(6);

        return view('livewire.infographic', ['data' => $data]);
    }
}
