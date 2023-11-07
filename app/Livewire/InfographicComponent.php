<?php

namespace App\Livewire;

use App\Models\Infographic;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class InfographicComponent extends Component
{
    use WithPagination;
    public $date = null;
    public function render()
    {
        if($this->date != null)
            $data = Infographic::query()
                ->where('date', '=',  $this->date )
                ->orderBy('date', 'desc')
                ->paginate(6);
        else
            $data = Infographic::query()
                ->orderBy('date', 'desc')
                ->paginate(6);

        return view('livewire.infographic', ['data' => $data]);
    }
}
