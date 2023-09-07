<?php

namespace App\Livewire\Mod;

use Livewire\Component;
use Livewire\WithFileUploads;

class ModIndex extends Component
{
    use WithFileUploads;
    public $showModal = false, $name, $photos = [];

    public function openModal() {
        $this->showModal = false;
    }

    public function closeModal() {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.mod.mod-index', [
            'title' => "Mod"
        ]);
    }

    public function uploadMod() {
        $this->validate([
            'name' => 'required',
            'description' => 'nullable',
            'thumbnail' => 'image|max:9166'
        ]);

        foreach($this->photos as $photo) {
            $photo->store('thumbnail');
        }
    }
}
