<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Album extends Model
{
    use HasFactory;
    use softDeletes;
    protected $primaryKey = 'id_album';
    protected $fillable = [
      'id_album',
      'nombre_album',
      'img_album',
      'descripcion_album',
      'fecha_album',
      'duracion_album',
      //'cantipistas_album',
      'id_genero',
      'id_artis'
    ];
    public function genero(){
        return $this->belongsTo('App\Genero', 'id_genero');
    }

    public function artists(){
        return $this->belongsTo('App\artists', 'id_artis');
    }

    public function music(){
        return $this->hasMany('App\Music');
    }
}
