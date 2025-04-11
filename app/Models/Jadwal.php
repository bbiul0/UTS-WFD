<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    protected $fillable = ['nomor_lapangan', 'jam_mulai', 'jam_selesai'];
    public function pesanans(): HasMany{
        return $this->hasMany(Pesanan::class);
    }

}
