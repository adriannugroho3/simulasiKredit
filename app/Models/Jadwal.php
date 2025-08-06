<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal_ansuran';
    protected $primaryKey = 'ansuran_id';
    protected $guarded = ['ansuran_id'];
    public function kontak()
    {

        // Mereturn relasi dari model Category terhadap model Post
        return $this->hasMany(Kontak::class, 'kontak_no');     // Satu kategori bisa dimiliki banyak post

    }
}
