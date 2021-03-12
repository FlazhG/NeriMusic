<?php

namespace Database\Factories;

use App\Models\Genero;
use Illuminate\Database\Eloquent\Factories\Factory;

class GeneroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Genero::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_genero' => $this->faker->name(),
            'nombre_genero' => $this->faker->randomElement(['Rock', 'Pop','Banda','Electronica','Jazz','Dupstep','Clasica','t
            hecno','Country','Pop','Hip-Hop','Raegueton','Cumbia','Banda','Blues','Salsa','Rap','Bachata']),
        ];
    }
}
