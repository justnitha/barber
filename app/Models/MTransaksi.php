<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MTransaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi'; // Sesuaikan dengan nama tabel Anda
    protected $primaryKey = 'transaksi_id';
    protected $fillable = ['layanan_id','total','bank','n_depan','n_belakang','no_telp','email','alamat','kode_pos'];  
    
    public function services()
    {
        return $this->belongsTo(MServices::class,'layanan_id','layanan_id');
    }
}
