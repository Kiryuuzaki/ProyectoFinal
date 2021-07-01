<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory;
    use SoftDeletes;
    //producto -> productos
    //protected $table = 'productos';

    protected $fillable = ['nombre','precio','cantidad'];
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getnombreAttribute($value)
    {
        return ucfirst(strtolower($value));
    }
}
