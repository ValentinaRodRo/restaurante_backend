<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Flautas',
            'price' => 23600,
            'description' => 'Flautas de pollo y carne con guacamole, frijol refrito y sour cream.',
            'image' => 'public/images/flautas.jpg', // Ajusta la ruta de la imagen según tu estructura de almacenamiento
            'category' => 'Entree', // Asegúrate de que coincida con la categoría que deseas (mayúsculas/minúsculas)
        ];
    }
}
