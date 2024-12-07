<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{


    public function delete($postId)
    {
        $post = Post::find($postId);

        // Authorization...

        $post->delete();

        sleep(1);
    }


    public function render()
    {


        return view('livewire.posts.show-posts', [
            'posts' => Post::All(),
        ]);
    }
}
