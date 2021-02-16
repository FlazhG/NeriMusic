<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;
    protected $primaryKey='rol_id';

    protected $fillable= [
        'rol',
    ];

    public function users(){
        return $this->hasMany(
            User::class,
            'rol_id',
            'rol_id'
        );
    }

}
