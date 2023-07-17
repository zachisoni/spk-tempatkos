<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Model untuk menyimpan riwayat hasil perhitungan
 */
class History extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Fungsi yang menghubungkan dari table History ke table User. 
     * Dapat digunakan untuk mendapatkan data user sesuai foreign key di table history
    */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     * Fungsi yang menghubungkan dari table History ke table User. 
     * Dapat digunakan untuk mendapatkan data calculation sesuai dengan id history
    */
    public function calculation(){
        return $this->hasMany(Calculation::class);
    }
}
