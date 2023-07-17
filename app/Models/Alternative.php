<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Model untuk alternatif yang dibuat oleh user
 */
class Alternative extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function calculation(){
        return $this->hasMany(Calculation::class);
    }
}
