<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Layout('layouts.app')]
#[Title('Courses | KGCA')]
class Course extends Component
{
    public function render()
    {
        return view('livewire.courses', [
            'courses' => Course::all(),
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
