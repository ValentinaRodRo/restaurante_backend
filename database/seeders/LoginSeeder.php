<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Login;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Agregar un usuario de ejemplo
        Login::create([
            'users' => 'valeluly',
            'password' => bcrypt('9876'),
        ]);

        // Puedes agregar más usuarios si lo deseas
    }
}