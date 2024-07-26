<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
public function run()
{
User::create([
'name' => 'John Doe',
'email' => 'john@example.com',
'password' => bcrypt('password123'),
]);

// Ajoutez d'autres utilisateurs si nécessaire
}
}
