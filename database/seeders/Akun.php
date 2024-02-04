<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Akun extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'wafa',
                'email' => 'admin@gmail.com',
                'password' => bcrypt(value: 'password'),
                'role' => 1
            ],
            [
                'name' => 'azril',
                'email' => 'azril@gmail.com',
                'password' => bcrypt(value: 'password'),
                'role' => 2
            ],
            [
                'name' => 'febri',
                'email' => 'febri@gmail.com',
                'password' => bcrypt(value: 'password'),
                'role' => 3
            ],
        ];
        foreach($data as $key => $d){
            User::create($d);
        }
    }
}
