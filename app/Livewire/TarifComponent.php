<?php

namespace App\Livewire;

use App\Models\Manager;
use App\Models\Tarif;
use Livewire\Component;
use Livewire\WithFileUploads;

class TarifComponent extends Component
{
    use WithFileUploads;

    public $id;
    public $name_kz;
    public $name_ru;
    public $doc_kz;
    public $doc_ru;
    public $date_kz;
    public $date_ru;
    public $tarif;
    public $file;

    public function edit(Tarif $t)
    {
        $this->id = $t->id;
        $this->name_kz = $t->name_kz;
        $this->name_ru = $t->name_ru;
        $this->doc_kz = $t->doc_kz;
        $this->doc_ru = $t->doc_ru;
        $this->date_kz = $t->date_kz;
        $this->date_ru = $t->date_ru;
        $this->tarif = $t->tarif;
    }

    public function updateInfo()
    {
        $this->validate([
            'name_kz' => 'required|string',
            'name_ru' => 'required|string',
            'doc_kz' => 'required|file',
            'doc_ru' => 'required|file',
            'date_kz' => 'required|string',
            'date_ru' => 'required|string',
            'tarif' => 'required|string',
        ],[
            'name_kz.*' => 'Название на казахском обязательно для заполнения и должно быть строкой',
            'name_ru.*' => 'Название на русском обязательно для заполнения и должно быть строкой',
            'doc_kz.*' => 'Документ на казахском обязательно для заполнения',
            'doc_ru.*' => 'Документ на русском обязательно для заполнения',
            'date_kz.*' => 'Дата на казахском обязательно для заполнения и должно быть строкой',
            'date_ru.*' => 'Дата на русском обязательно для заполнения и должно быть строкой',
            'tarif.*' => 'Тариф обязательно для заполнения и должно быть строкой',
        ]);


        Tarif::query()->findOrFail($this->id)->update([
            'name_kz' => $this->name_kz,
            'name_ru' => $this->name_ru,
            'doc_kz' => $this->doc_kz,
            'doc_ru' => $this->doc_ru,
            'date_kz' => $this->date_kz,
            'date_ru' => $this->date_ru,
            'tarif' => $this->tarif,
        ]);
        session()->flash('message', 'Тариф успешно обновлен!');
        $this->cancelEdit();
    }

    public function cancelEdit()
    {
        $this->reset(['id','name_kz','name_ru','doc_kz','doc_ru','date_kz','date_ru','tarif']);
    }


    public function delete(Tarif $t)
    {
        $t->delete();

        session()->flash('message', 'Тариф успешно удален!');
    }


    public function create()
    {
        $this->validate([
            'name_kz' => 'required|string',
            'name_ru' => 'required|string',
            'doc_kz' => 'required',
            'doc_ru' => 'required',
            'date_kz' => 'required|string',
            'date_ru' => 'required|string',
            'tarif' => 'required|string',
        ],[
            'name_kz.*' => 'Название на казахском обязательно для заполнения и должно быть строкой',
            'name_ru.*' => 'Название на русском обязательно для заполнения и должно быть строкой',
            'doc_kz.*' => 'Документ на казахском обязательно для заполнения',
            'doc_ru.*' => 'Документ на русском обязательно для заполнения',
            'date_kz.*' => 'Дата на казахском обязательно для заполнения и должно быть строкой',
            'date_ru.*' => 'Дата на русском обязательно для заполнения и должно быть строкой',
            'tarif.*' => 'Тариф обязательно для заполнения и должно быть строкой',
        ]);

        Tarif::create([
            'name_kz' => $this->name_kz,
            'name_ru' => $this->name_ru,

            'doc_kz' =>'storage/'.$this->doc_kz->store('manager','public'),
            'doc_ru' =>'storage/'.$this->doc_ru->store('manager','public'),

            'date_kz' => $this->date_kz,
            'date_ru' => $this->date_ru,

            'tarif' => $this->tarif,
        ]);

        session()->flash('message', 'Тариф успешно создан!');

        $this->cancelEdit();
    }
    public function render()
    {
        $tarifs = Tarif::query()->get();
        return view('livewire.tarif-component', compact('tarifs'));
    }
}
