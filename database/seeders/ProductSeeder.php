<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Product::factory()->create([
            'name' => 'Flautillass',
            'price' => 23600,
            'description' => 'Flautas de pollo y carne con guacamole, frijol refrito y sour cream.',
            'image' => 'http://localhost:8000/images/flautas.jpg',
            'category' => 'Entrada',
        ]);
        Product::factory()->create([
            'name' => 'Nachos',
            'price' => 20300,
            'description' => 'Totopos de maíz con chile con carne, fríjol refrito, queso, jalapeños, guacamole y sour cream.',
            'image' => 'http://localhost:8000/images/nachos.jpg',
            'category' => 'Entrada',
        ]);
        Product::factory()->create([
            'name' => 'Quesadillas',
            'price' => 25000,
            'description' => 'Quesadilla de tortilla de Harina o Maíz, Queso, Pollo, Chorizo, Carne',
            'image' => 'http://localhost:8000/images/quesadillas.jpg',
            'category' => 'Entrada',
        ]);
        Product::factory()->create([
            'name' => 'Esquites',
            'price' => 21700,
            'description' => 'Mazorca a la parrilla desgranada, con limón, mayonesa de jalapeños y queso rayado.',
            'image' => 'http://localhost:8000/images/esquites.jpg',
            'category' => 'Entrada',
        ]);
        Product::factory()->create([
            'name' => 'Fajitas',
            'price' => 27300,
            'description' => 'Fajitas de carne con vegetales, guacamole, sour cream, queso, fríjol refrito y tortillas.',
            'image' => 'http://localhost:8000/images/fajitas.jpg',
            'category' => 'Plato Fuerte',
        ]);
        Product::factory()->create([
            'name' => 'Tacos X5',
            'price' => 28200,
            'description' => 'Tacos de pollo, cerdo o al pastor, con pico de gallo, frijoles refritos, sour cream y aguacate.',
            'image' => 'http://localhost:8000/images/tacos.jpg',
            'category' => 'Plato Fuerte',
        ]);
        Product::factory()->create([
            'name' => 'Burrito',
            'price' => 29000,
            'description' => 'De carnitas, Ropa vieja o Pollo, con queso, frijol negro, guacamole, pico de gallo y salsa taquera.',
            'image' => 'http://localhost:8000/images/burritos.jpg',
            'category' => 'Plato Fuerte',
        ]);
        Product::factory()->create([
            'name' => 'Mole Poblano',
            'price' => 30600,
            'description' => 'Carne en salsa de mole: mezcla de diferentes chiles secos, especias, chocolate y caldo de carne.',
            'image' => 'http://localhost:8000/images/mole.png',
            'category' => 'Plato Fuerte',
        ]);
        Product::factory()->create([
            'name' => 'Agua de Jamaica',
            'price' => 5600,
            'description' => 'Deliciosa agua de flor de Jaimaca. Pidala con o sin azucar.',
            'image' => 'http://localhost:8000/images/jamaica.jpg',
            'category' => 'Bebida',
        ]);
        Product::factory()->create([
            'name' => 'Agua de Horchata',
            'price' => 5600,
            'description' => 'Deliciosa bebida hecha a partir de una mezcla de arroz blanco, leche, azúcar, vainilla y canela.',
            'image' => 'http://localhost:8000/images/horchata.jpg',
            'category' => 'Bebida',
        ]);
        Product::factory()->create([
            'name' => 'Agua de Tamarindo',
            'price' => 5600,
            'description' => 'Deliciosa y refrescante agua de tamarindo. Pidala con o sin azucar.',
            'image' => 'http://localhost:8000/images/tamarindo.jpg',
            'category' => 'Bebida',
        ]);
        Product::factory()->create([
            'name' => 'Michelada',
            'price' => 6600,
            'description' => 'Cerveza con hielo, sal y limón.',
            'image' => 'http://localhost:8000/images/michelada.jpg',
            'category' => 'Bebida',
        ]);

    }

}
