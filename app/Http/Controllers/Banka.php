<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rude;

class Banka extends Controller
{
    public function mojeRude(){
        $userId = Auth::id();

        $rude = Rude::leftJoin('rude_user', function ($join) use ($userId) {
            $join->on('rude.id', '=', 'rude_user.rude_id')
                ->where('rude_user.user_id', '=', $userId);
        })
            ->select('rude.ime', 'rude_user.kolicina')
            ->get();

        return view('banka', compact('rude'));
    }
}

