<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MServices extends Model
{
    use HasFactory;
    protected $table = 'layanan'; // Sesuaikan dengan nama tabel Anda
    protected $primaryKey = 'layanan_id';
    protected $fillable = ['type','nama_layanan','deskripsi','harga',]; // Tambahkan 'kat_aktif' 
    public $timestamps = false;

    public function layanan()
    {
        return $this->belongsTo(MTransaksi::class, 'layanan_id','layanan_id');
    }
}
