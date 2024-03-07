<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;
    protected $table = "surat_keluars";
    protected $guarded = "";

    public function unitkerja() {
        return $this->belongsTo(UnitKerja::class, 'pengirim');
    }

     public function perihal() {
        return $this->belongsTo(Perihal::class, 'id_perihal');
    }
}
