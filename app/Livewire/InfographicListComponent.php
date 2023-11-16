<?php

namespace App\Livewire;

use App\Models\Infographic;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class InfographicListComponent extends Component
{
    use WithPagination;
    public $infoID;
    public $infoOutput;
    public $infoDate;
    public $infoContacted;
    public $infoFree;
    public $infoCentred;
    public function edit(Infographic $info)
    {
        $this->infoID = $info->id;
        $this->infoDate = $info->date;
        $this->infoCentred = $info->centred;
        $this->infoOutput = $info->output;
        $this->infoContacted = $info->contacted;
        $this->infoFree = $info->free;
    }

    public function updateInfo()
    {
        $this->validate([
            'infoDate' => 'required|date',
            'infoCentred' => 'required|integer',
            'infoOutput' => 'required|integer',
            'infoContacted' => 'required|integer',
            'infoFree' => 'required|integer',
        ],[
            'infoDate.*' => 'Поле "Дата" обязательно для заполнения и должно быть в формате дд.мм.гггг',
            'infoCentred.*' => 'Поле "Центрированные" обязательно для заполнения и должно быть числом',
            'infoOutput.*' => 'Поле "Выдано" обязательно для заполнения и должно быть числом',
            'infoContacted.*' => 'Поле "Контактированные" обязательно для заполнения и должно быть числом',
            'infoFree.*' => 'Поле "Бесплатно" обязательно для заполнения и должно быть числом',
        ]);


        $qwe = Infographic::query()->findOrFail($this->infoID)->update([
            'date' => $this->infoDate,
            'centred' => $this->infoCentred,
            'output' => $this->infoOutput,
            'contacted' => $this->infoContacted,
            'free' => $this->infoFree,
        ]);
        session()->flash('message', 'Инфографика успешно обновлен!');
        $this->cancelEdit();
    }

    public function cancelEdit()
    {
        $this->reset(['infoID','infoContacted','infoOutput','infoCentred','infoDate','infoFree']);
    }

    public function delete(Infographic $info)
    {
        $info->delete();

        session()->flash('message', 'Инфографика успешно удалена!');
    }

    public function render()
    {
        $infos = Infographic::query()->orderBy('date','desc')->paginate(10);
        return view('livewire.admin.infographic-list', ['infos' => $infos]);
    }
}
