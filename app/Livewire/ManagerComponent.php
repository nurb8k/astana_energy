<?php

namespace App\Livewire;

use App\Models\Manager;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class ManagerComponent extends Component
{
    use WithFileUploads;

    public $id;
    public $pos_kz;
    public $pos_ru;
    public $name;

    public $img;
    public function edit(Manager $m)
    {
        $this->id = $m->id;
        $this->pos_kz = $m->position_kz;
        $this->pos_ru = $m->position_ru;
        $this->name = $m->name;
        $this->img = $m->image;
    }


    public function updateInfo()
    {
        $this->validate([
            'pos_kz' => 'required|string',
            'pos_ru' => 'required|string',
            'name' => 'required|string',
        ],[
            'pos_kz.*' => 'Название на казахском обязательно для заполнения и должно быть строкой',
            'name.*' => 'Имя обязательно для заполнения и должно быть строкой',
            'pos_ru.*' => 'Название на русском обязательно для заполнения и должно быть строкой',
        ]);


        Manager::query()->findOrFail($this->id)->update([
            'position_ru' => $this->pos_ru,
            'name' => $this->name,
            'position_kz' => $this->pos_kz,
        ]);
        session()->flash('message', 'Руководитель успешно обновлен!');
        $this->cancelEdit();
    }
    public function cancelEdit()
    {
        $this->reset(['id','pos_ru','pos_kz','img']);
    }
    public function delete(Manager $m)
    {
        $m->delete();

        session()->flash('message', 'Руководитель успешно удалена!');
    }
    public function create()
    {
        $this->validate([
            'pos_kz' => 'required|string',
            'pos_ru' => 'required|string',
            'name' => 'required|string',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ],[
            'pos_kz.*' => 'Название на казахском обязательно для заполнения и должно быть строкой',
            'pos_ru.*' => 'Название на русском обязательно для заполнения и должно быть строкой',
            'name.*' => 'ФИО обязательно для заполнения и должно быть строкой',
            'img' => 'Изображение обязательно для заполнения и формат должен быть jpeg,png,jpg,gif,svg и размер не более 4 МБ',
        ]);

        Manager::create([
            'position_kz' => $this->pos_kz,
            'name' => $this->name,
            'position_ru' => $this->pos_ru,
            'image' => 'storage/'.$this->img->store('manager','public')
        ]);

        session()->flash('message', 'Руководитель успешно создан!');

        $this->reset(['id', 'pos_kz','pos_ru','img']);
    }

    public function render()
    {
        $managers = Manager::query()->get();
        return view('livewire.admin.manager-component',compact('managers'));
    }


}
