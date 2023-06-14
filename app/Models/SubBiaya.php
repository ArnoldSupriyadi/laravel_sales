<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubBiaya extends Model
{
    use HasFactory;

    protected $table = 'sub_biayas';

    protected $fillable = [
        'name',
        'biaya'
    ];

    public function rincianBiaya()
    {
        return $this->hasMany(RincianBiaya::class, 'id_sub_biaya', 'id');
    }

    public function Event()
    {
        return $this->belongsTo(Event::class, 'id_sub_biaya');
    }
}
