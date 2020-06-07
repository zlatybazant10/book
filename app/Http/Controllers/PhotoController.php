<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store() {
        $data = request()->validate([
            'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('profile', 'public');

        auth()->user()->create([
            'image' => $imagePath,
        ]);

    }

}
