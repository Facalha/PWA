<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Annotation;

class NoteForm extends Component
{
    public $note = '';
    public $annotations;

    public function mount()
    {
        $this->annotations = Annotation::all();
    }

    public function addNote()
    {
        $this->validate([
            'note' => 'required|string',
        ]);

        Annotation::create(['note' => $this->note]);
        $this->annotations = Annotation::all();
        $this->note = '';
    }

    public function clearForm()
    {
        Annotation::truncate();
        $this->annotations = collect();
        $this->note = '';
    }

    public function render()
    {
        return view('livewire.note-form');
    }
}
