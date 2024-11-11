<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin Mini',
                'email' =>'adminmini@gmail.com',
                'role' => 'Admin',
                'password' => bcrypt('1234567890'),
            ],
            [
                'name' => 'Produsen Mini',
                'email' =>'produsenmini@gmail.com',
                'role' => 'Petugas',
                'password' => bcrypt('1234567890'),
            ],
            [
                'name' => 'Pencoba Mini',
                'email' =>'pencobamini@gmail.com',
                'role' => 'Pimpinan',
                'password' => bcrypt('1234567890'),
            ],
        ];
        foreach($userData as $key => $value) {
            User::create($value);
        }
    }
}
