<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'     => 'admin',
            'email'    => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => password_hash("secret", PASSWORD_BCRYPT, ['cost' => 12]),
            'remember_token' => Str::random(10),
        ]);
    }
}
