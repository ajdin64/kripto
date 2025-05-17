<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vijesti extends Model
{
    public $table = 'vijesti';
    protected $fillable = ['naslov', 'slika', 'kontent'];
}
