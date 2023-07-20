<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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

    public static function getAll(){
        return Alternative::where('user_id', Auth::user()->id)->get();
    }

    public static function getRow(string $id){
        return Alternative::getAll()->find((int)$id);
    }
}
