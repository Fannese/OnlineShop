<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User(
            [
                'name' => Str::random(10),
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123'),
                'role_as' => 'admin',
            ]

        );
        $admin->save();
    }
}
