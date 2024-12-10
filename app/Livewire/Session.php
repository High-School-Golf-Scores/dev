<?php

namespace App\Livewire;


use http\Client\Curl\User;use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Session extends Component
{
    public $user;



    public function mount()

    {

        $this->user = Auth::user(); // Get the logged-in user

    }



    public function render()

    {

        return view('livewire.session', [

            'user' => $this->user

        ]);

    }


}
