<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Layout('layouts.app')]
#[Title('Player Roster | KGCA')]
class Player extends Component
{
    public function render()
    {
        return view('livewire.player', [
            'players' => auth()->user()->players
        ]);
    }
}


//public function index()
//{
//    $posts = Post::where('user_id', Auth::user()->id)->paginate(10);
//    $categories = Category::all();
//    $tags = Tag::all();
//
//    return View('posts.index')->with([
//        'posts' => $posts,
//        'categories' => $categories,
//        'tags' => $tags
//    ]);
//}
