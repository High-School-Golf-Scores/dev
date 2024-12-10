<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function logout()
    {
        Auth::logout(); // Log out the user
        session()->invalidate(); // Invalidate the session
        session()->regenerateToken(); // Regenerate the CSRF token for security

        return redirect('/'); // Redirect to the home page (or any other page)
    }

    public function render()
    {
        return view('livewire.logout');
    }
}
