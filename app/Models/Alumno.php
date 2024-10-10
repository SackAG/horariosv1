<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alumno extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre','Email'];

    public function carreras(): BelongsTo{
        return $this->belongsTo(Carrera::class);
    }
}
