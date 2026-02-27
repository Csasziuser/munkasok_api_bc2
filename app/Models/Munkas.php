<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Munkas extends Model
{
    protected $table = "munkasok";
    protected $fillable = ['name', 'phone', 'available'];

    public function jelolesek() {
        return $this -> hasMany(Kijeloles::class);
    }
}
