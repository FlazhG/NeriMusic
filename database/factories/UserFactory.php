<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'lastname_usu' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'img_user' => 'Avatar.png',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'date_usu' => $this->faker->date(),
            'sexo_usu' => $this->faker->randomElement(['masculino','femenino','otro']),
            'phone_usu'=> $this->faker->phoneNumber(5),
            'terms_usu' => 'on',
            'remember_token' => Str::random(10),
            ];
    }
}
