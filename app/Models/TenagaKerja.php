<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenagaKerja extends Model
{
    use HasFactory;

    protected $table = 'tenaga_kerjas';

    protected $fillable = [
        'event_id',
        'id_sub_pekerja',
        'name',
        'unit',
        'jml_kebutuhan',
        'keterangan',
        'total_all'
    ];

    public function rincianPekerja()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
