<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;
    protected $table = 'pendaftar';
    protected $fillable = [
        'kompetensi_keahlian',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'asal_sekolah',
        'jenis_kelamin',
        'agama',
        'kewarganegaraan',
        'jalan',
        'rt/rw',
        'kelurahan/desa',
        'kecamatan',
        'kota/kabupaten',
        'provinsi',
        'jenis_tinggal',
        'telephone',
        'nama_ayah',
        'nik_ayah',
        'tanggal_lahir_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'telephone_ayah',
        'nama_ibu',
        'nik_ibu',
        'tanggal_lahir_ibu',
        'pendidikan_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'telephone_ibu',
        'sumber_rekomendasi',
        'nama_sumber_rekomendasi',
        'user_id',
        'lulus'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
