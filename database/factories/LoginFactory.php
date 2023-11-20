<?php

namespace Database\Factories;

use App\Models\Login;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LoginFactory extends Factory
{
    /**
     * Define el modelo de fábrica correspondiente.
     *
     * @var string
     */
    protected $model = Login::class;

    /**
     * Define el estado predeterminado del modelo.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'users' => $this->faker->userName,
            'password' => bcrypt('password123'), // Asegúrate de usar una contraseña segura
        ];
    }
}
