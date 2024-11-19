<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{

    protected $fillable = [
        'name',
        'nim',
        'jurusan_id'
    ];

    public function jurusan(): BelongsTo
    {
        return $this->belongsTo(jurusan::class);
    }
}
