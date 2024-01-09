<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MBarber extends Model
{
    use HasFactory;

    protected $table = 'barber'; // Sesuaikan dengan nama tabel Anda
    protected $primaryKey = 'barber_id';
    protected $fillable = ['nama','img_file','nomor_telepon','email','alamat','job_desk']; // Tambahkan 'kat_aktif' 
    public $timestamps = false;

    public function deleteBarber($id)
    {
        $barber = MBarber::find($id);

        if (!$barber) {
            return false; // Data tidak ditemukan
        }

        $barber->delete();

        return true; // Berhasil menghapus
    }
}
