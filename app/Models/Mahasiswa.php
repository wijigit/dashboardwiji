<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public function jurusan(): BelongsTo
    {
        return $this->belongsTo(jurusan::class);
    }
}
