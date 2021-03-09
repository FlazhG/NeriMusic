<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;
class artists extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $primaryKey ='id_artis';
    protected $fillable =['id_artis','nombre_artis','apellido_artis','email_artis','email_verified','fecha_artis','sexo_artis',
    'password_artis','img_artis','telefono_artis','terminos_artis','email_verified','disquera_artis',
    'descripcion_artis'];
}
