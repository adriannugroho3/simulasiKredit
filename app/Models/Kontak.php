<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;

    protected $table = 'kontak';
    protected $primaryKey = 'kontak_no';
    protected $guarded = ['kontak_no'];

    // Method untuk menghubungkan model CategoryArticle
    // public function jadwal()
    // {

    //     // Mereturn relasi dari model Post terhadap model Category
    //     return $this->belongsTo(Jadwal::class, 'kontak_no');
    // }
}
