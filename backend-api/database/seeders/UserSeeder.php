<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '$2a$10$7oMxkBuQ0PpbVxpJl0ufNerj0TTuZmRxrD76LlyKCaMCh8bpZqVS2',   //admin
        ])->assignRole('Admin');
        $user=User::factory(10)->create();
        foreach ($user as $u){
            $u->assignRole('Seller');
        }
    }
}
