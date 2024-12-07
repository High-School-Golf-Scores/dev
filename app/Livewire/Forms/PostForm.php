<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Validate;
use App\Models\Post;

class PostForm extends Form
{
    #[Validate('required|min:3')]
    public $title = '';

    #[Validate('required')]
    public $content = '';

    public Post $post;

    public function setPost($post)
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->content = $post->content;
    }

    public function save()
    {
//        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->reset(['title', 'content']);
    }

    public function update()
    {
//        $this->validate();

        $this->post->update([
            'title' => $this->title,
            'content' => $this->content,
        ]);
    }
}
