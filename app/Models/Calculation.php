<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Model untuk hasil perhitungan, yang berisi alternatif, ranking, dan id history
 */
class Calculation extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function alternative(){
        return $this->belongsTo(Alternative::class);
    }

    public function history()
    {
        return $this->belongsTo(History::class);
    }

}
