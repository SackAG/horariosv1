<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Puestos2
 *
 * @property $id
 * @property $nombre
 * @property $tipoPuesto
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Puestos2 extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'tipoPuesto'];


}
