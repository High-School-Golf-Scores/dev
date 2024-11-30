<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class TeamDropDown extends Controller
{
    /**
     * Get the view / contents that represent the component.
     */
    public function index()
    {
        $data = School::all();
        return view('components.team-drop-down', compact('data'));
    }
}
