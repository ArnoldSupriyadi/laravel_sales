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

    public function tenagaKerja()
    {
        return $this->hasMany(TenagaKerja::class, 'id');
    }

    public function Event()
    {
        return $this->belongsTo(Event::class, 'id_sub_pekerja');
    }
}
