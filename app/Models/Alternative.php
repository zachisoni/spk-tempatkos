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

    public static function changePrice(int $price){
        if($price < 500000){
            return 5;
        } else if ($price >= 500000 && $price < 700000){
            return 4;
        } else if ($price >= 700000 && $price < 1000000){
            return 3;
        } else if ($price >= 1000000 && $price < 2000000){
            return 2;
        } else if ($price > 2000000){
            return 1;
        }else {
            return 0;
        }
    }
}
