<?php

namespace App\Livewire;

use App\Models\Tag;
use Livewire\Component;

class TagComponent extends Component
{
    public $tagID;
    public $name_kz;
    public $name_ru;
    public function edit(Tag $t)
    {
        $this->tagID = $t->id;
        $this->name_kz = $t->name_kz;
        $this->name_ru = $t->name_ru;
    }

    public function updateInfo()
{
    $this->validate([
        'name_kz' => 'required|string',
        'name_ru' => 'required|string',
    ],[
        'name_kz.*' => 'Название на казахском обязательно для заполнения и должно быть строкой',
        'name_ru.*' => 'Название на русском обязательно для заполнения и должно быть строкой',
    ]);


    Tag::query()->findOrFail($this->tagID)->update([
        'name_kz' => $this->name_kz,
        'name_ru' => $this->name_ru
    ]);
    session()->flash('message', 'Тег успешно обновлен!');
    $this->cancelEdit();
}
    public function cancelEdit()
    {
        $this->reset(['tagID','name_kz','name_ru']);
    }
    public function delete(Tag $t)
    {
        $t->delete();

        session()->flash('message', 'Тег успешно удалена!');
    }
    public function create()
    {
        $this->validate([
            'name_kz' => 'required|string',
            'name_ru' => 'required|string',
        ],[
            'name_kz.*' => 'Название на казахском обязательно для заполнения и должно быть строкой',
            'name_ru.*' => 'Название на русском обязательно для заполнения и должно быть строкой',
        ]);

        Tag::create([
            'name_kz' => $this->name_kz,
            'name_ru' => $this->name_ru
        ]);

        session()->flash('message', 'Тег успешно создан!');

        // Reset form fields after creating a new tag
        $this->reset(['name_kz', 'name_ru']);
    }

    public function render()
    {
        $tags = Tag::query()->get();
        return view('livewire.admin.tag-component',compact('tags')  );
    }
}
