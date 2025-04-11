<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pesanan extends Model
{
    protected $table = 'pesanan';
    protected $fillable = ['nama_pemesan', 'wa_pemesan', 'tanggal', 'jadwal_id'];
        public function jadwal(){
        return $this->belongsTo(Jadwal::class);
    }

}
