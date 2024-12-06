<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class ShowPosts extends Component
{
    public function delete($postId)
    {
        $post = Post::find($postId);

        // Authorization...

        $post->delete();

    }

    public function render()
    {
        return view('livewire.posts.show-posts', [
            'posts' => Post::all(),
        ]);
    }
}
