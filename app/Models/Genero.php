<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Genero extends Model
{
    use HasFactory;
    use softDeletes;
    protected $primaryKey = 'id_genero';
    protected $fillable = [
      'id_genero',
      'nombre_genero'
    ];
    public function album(){
        return $this->hasMany('App\Album');
    }
}
