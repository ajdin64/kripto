<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vault extends Model
{
    protected $table = 'vault';
    protected $fillable = [
      'ime',
      'kolicina',
      'cijena'
    ];
}
