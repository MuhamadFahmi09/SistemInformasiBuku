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
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('admin123'),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User',
            'email' => 'user@email.com',
            'password' => bcrypt('user123'),
        ]);

        $user->assignRole('user');
        
        $kasir = User::create([
            'name' => 'Kasir',
            'email' => 'kasir@email.com',
            'password' => bcrypt('kasir123')
        ]);

        $kasir->assignRole('kasir');
    }
}
