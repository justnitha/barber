<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MKarir extends Model
{
    use HasFactory;
    protected $table = 'karir'; // Sesuaikan dengan nama tabel Anda
    protected $primaryKey = 'id';
    protected $fillable = ['name','email','phone_number','app_for','about','file']; // Tambahkan 'kat_aktif' 
    public $timestamps = false;
}
