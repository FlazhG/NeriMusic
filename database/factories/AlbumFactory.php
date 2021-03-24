<?php

namespace Database\Factories;

use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AlbumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Album::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre_album' => $this->faker->name(),
            'descripcion_album' => $this->faker->lastName(),
            'fecha_album' => $this->faker->date(),
            'img_album' => 'Avatar.png',
            'duracion_album'  => '03.00',
            'id_artis' => $this->faker->randomElement(['1', '2','3','4','5','6','7','8']),
            'id_genero' => $this->faker->randomElement(['1', '2','6','4','8','6','10','8']),
            'remember_token' => Str::random(10),
        ];
    }
}
