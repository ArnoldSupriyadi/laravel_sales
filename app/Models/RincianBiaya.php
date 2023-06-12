<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RincianBiaya extends Model
{
    use HasFactory;

    protected $table = 'rincian_biayas';

    protected $fillable = [
        'event_id',
        'id_sub_biaya',
        'name',
        'unit',
        'jml_kebutuhan',
        'keterangan',
        'total_all'
    ];

    public function rincianEvent()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function rincianBiaya()
    {
        return $this->belongsTo(SubBiaya::class, 'id');
    }
}
