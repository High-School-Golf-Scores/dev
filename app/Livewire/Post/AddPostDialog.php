<?php

namespace App\Livewire\Post;

use App\Livewire\Forms\PostForm;
use Livewire\Component;

class AddPostDialog extends Component
{
    public PostForm $form;

    public $show = false;

    public function add()
    {
        $this->form->save();

        $this->reset('show');

        $this->dispatch('added');
    }

    public function render()
    {
        return view('livewire.add-post-dialog');
    }
}
