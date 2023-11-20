<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Login;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Str;

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
        Login::factory(1)->create([
            'users' => 'valeluly',
            'password' => bcrypt('9876'),
        ]);
    }
}