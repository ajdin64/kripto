<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proizvodi extends Model
{
    protected $table = 'proizvodi';
    protected $fillable = [
      'user_id',
        'ime',
        'opis',
        'cijena',
        'status',
        'kolicina',

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
