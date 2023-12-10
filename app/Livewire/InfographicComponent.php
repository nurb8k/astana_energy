<?php

namespace App\Livewire;

use App\Models\Infographic;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class InfographicComponent extends Component
{
    use WithPagination;

    public $date;

    public function render()
    {

        $query = Infographic::query()
            ->orderBy('date', 'desc');

        if ($this->date) {
            $query->where('date', '=', $this->date);
        }

        $data = $query->paginate(6);

        return view('livewire.infographic', ['data' => $data]);
    }

}
