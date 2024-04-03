<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'MaxiSeeder',
            'username' => 'masseeder',
            'email' => 'seeder@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
