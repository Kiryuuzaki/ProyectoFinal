<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['categoria'];

    public function recursos()
    {
        return $this->hasMany(Recurso::class);
    }

    public function setcategoriaAttribute($value)
    {
        $this->attributes['categoria'] = mb_strtoupper($value,'UTF-8');
    }
}
