<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'password' => Hash::make('12345678'),
        ]);
        DB::table('coachings')->insert([
            'name' => "Coaching",
            'email' => "coaching@gmail.com",
            'password' => Hash::make('12345678'),
        ]);
        DB::table('teachers')->insert([
            'name' => "Teacher",
            'email' => "teacher@gmail.com",
            'password' => Hash::make('12345678'),
        ]);
        DB::table('students')->insert([
            'name' => "Student",
            'email' => "student@gmail.com",
            'password' => Hash::make('12345678'),
        ]);
    }
}
