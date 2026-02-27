<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kijeloles extends Model
{
    protected $table = 'kijelolesek';

    protected $fillable = ["munkas_id","task_name"];

    public function munkas(){
        return $this->belongsTo(Munkas::class);
    }
}
