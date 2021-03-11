<?php

namespace Database\Factories;

use App\Models\Artists;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtistsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Artists::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre_artis' => $this->faker->name(),
            'apellido_artis' => $this->faker->lastName(),
            'email_artis' => $this->faker->unique()->safeEmail,
            'email_verified' => null,
            'fecha_artis' => $this->faker->date(),
            'sexo_artis' => $this->faker->randomElement(['Masculino', 'Femenino']),
            'password_artis' => 'lastName',
            'img_artis' => null,
            'telefono_artis' => $this->faker->phoneNumber(10),
            'terminos_artis' => 'on',
            'disquera_artis'  => 'Laboratorio records',
            'descripcion_artis'  => 'buen artisa amable xd',

        
        ];
    }
}
