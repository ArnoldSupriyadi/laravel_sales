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

    public function subPekerja()
    {
        return $this->hasMany(TenagaKerja::class, 'id');
    }
}
