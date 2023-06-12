<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubPekerja extends Model
{
    use HasFactory;

    protected $table = 'sub_pekerjas';

    protected $fillable = [
        'name',
        'biaya'
    ];

    public function rincianPekerja()
    {
        return $this->belongsTo(TenagaKerja::class, 'tenaga_kerja');
    }
}
