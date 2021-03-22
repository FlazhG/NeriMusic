<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Music extends Model
{
  protected $table = 'musics';

    use HasFactory;
    use softDeletes;
    protected $primaryKey = 'id_music';
    protected $fillable = [
      'id_music',
      'nombre_music',
      'id_artis',
      'caratula_music',
      'duracion_music',
      'id_genero',
      'formato_music',
      'discografica_music',
      'descripcion_music',
      'fecha_music',
      'id_album'
    ];
    public function genero(){
        return $this->belongsTo('App\Genero', 'id_genero');
    }

    public function artists(){
        return $this->belongsTo('App\artists', 'id_artis');
    }
    
    public function album(){
        return $this->belongsTo('App\Album', 'id_album');
    }
}
