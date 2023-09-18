<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class User_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     [
        //         'name' => 'admin',
        //         'email' => 'admin@gmail.com',
        //         'password' =>Hash::make('asdfg123'),
        //     ],
        //     [
        //         'name' => 'user',
        //         'email' => 'user@gmail.com',
        //         'password' =>Hash::make('1234asdfg'),
        //     ],
        // ]);
        factor(User::class, 3)->create();
    }
}
