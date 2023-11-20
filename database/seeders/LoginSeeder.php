<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Login;

class LoginTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Usar el factory para crear un usuario
        Login::factory()->create([
            'users' => 'valeluly',
            'password' => bcrypt('9876'),
        ]);
    }
}