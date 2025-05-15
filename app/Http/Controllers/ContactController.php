<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ContactModel;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'ime' => 'required|string|min:3|max:20',
            'email' => 'required|email',
            'poruka' => 'required|string|min:3|max:200',
        ]);

        ContactModel::create([
            'ime' => $request->ime,
            'email' => $request->email,
            'poruka' => $request->poruka,
        ]);


        return redirect('contact')->with('success', 'Poruka je uspješno poslana!');
    }
}
