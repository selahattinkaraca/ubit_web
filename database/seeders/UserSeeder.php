<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user1 = User::create([
            'name' => 'Admin',
            'email' => 'admin@ubit.com.tr',
            'password' => 'Ubit123456.',
            'avatar' => '/images/avatar-1.jpg'
        ]);
    }
}
