<?php

namespace Database\Factories;

use App\Models\Artists;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'email_verified' => now(),
            'fecha_artis' => $this->faker->date(),
            'sexo_artis' => $this->faker->randomElement(['Masculino', 'Femenino']),
            'password_artis' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'img_artis' => null,
            'telefono_artis' => $this->faker->phoneNumber(5),
            'terminos_artis' => 'on',
            'disquera_artis'  => 'Laboratorio records',
            'descripcion_artis'  => 'buen artisa amable xd',
            'remember_token' => Str::random(10),

        
        ];
    }
}
