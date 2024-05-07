<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'email_verified_at' => now(),
            'otp' => null,
            'status' => true,
            'password' => Hash::make('admin'),
            'type' => 1,
            'mobile' => '1234567890',
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    } //php artisan db:seed --class=UsersTableSeeder

}
