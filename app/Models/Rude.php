<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rude extends Model
{
    protected $table = 'rude';
    protected $fillable = [
        'ime',
        'vrijednost',

    ];
    public function users(){
        return $this->belongsToMany(User::class)->withPivot('kolicina')->withTimestamps();
    }
}
