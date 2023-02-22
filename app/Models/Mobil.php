<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_mobil',
        'kapasitas',
        'gambar',
        'harga',
    ];


    public function booking(){
        return $this->hasMany(Booking::class);
    }
}
