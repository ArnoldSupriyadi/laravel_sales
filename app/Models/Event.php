<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    protected $table = 'events';

    protected $fillable = [
        'user_id',
        'nama_acara',
        'waktu_mulai',
        'waktu_akhir',
        'tempat',
        'riwayat_event',
        'perkiraan_traffic',
        'document',
        'is_approve',
        'diperiksa_oleh',
        'disetujui_oleh'
    ];

    public function userEvent()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function userCheck()
    {
        return $this->belongsTo(User::class, 'diperiksa_oleh');
    }

    public function userApprove()
    {
        return $this->belongsTo(User::class, 'disetujui_oleh');
    }

}
