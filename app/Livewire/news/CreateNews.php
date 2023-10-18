<?php

namespace App\Livewire\news;

use Livewire\Attributes\Rule;
use Livewire\Component;

class CreateNews extends Component
{
    #[Rule('required')]
    public $title_kz = '';

    #[Rule('required')]
    public $title_ru = '';

    #[Rule('required')]
    public $desc_ru = '';
    #[Rule('required')]
    public $desc_kz = '';

    public $images = '';

    public function createNews()
    {

    }
    
    public function render()
    {
        return view('livewire.admin.create-news');
    }
}
