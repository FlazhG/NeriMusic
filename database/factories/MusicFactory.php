<?php

namespace Database\Factories;

use App\Models\Music;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MusicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Music::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'nombre_music' => $this->faker->name(),
            'fecha_music' => $this->faker->date(),
            'caratula_music' => null,
            'duracion_music'  => '03:00',
            'formato_music' => $this->faker->randomElement(['MP3', 'M4a','MP4']),
            'discografica_music'  => 'Laboratorio Records',
            'descripcion_music'  => 'buena musica xd',
            'id_artis' => $this->faker->randomElement(['1', '2','3','4','5','6','7','8']),
            'id_genero' => $this->faker->randomElement(['1', '2','6','4','8','6','10','8']),
            'id_album' => $this->faker->randomElement(['1', '2','6','4','8','6','10','8']),
            'remember_token' => Str::random(10),
        ];
    }
}
