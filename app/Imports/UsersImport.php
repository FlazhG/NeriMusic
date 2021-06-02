<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        return new User([

            'name' => $row ['name'],
            'lastname_usu' => $row ['lastname_usu'],
            'date_usu' => $row ['date_usu'],
            'sexo_usu' => $row ['sexo_usu'],
            'phone_usu' => $row ['phone_usu'],
            'email' => $row ['email'],
            'password' => $row ['password'],

        ]);
    }
}
