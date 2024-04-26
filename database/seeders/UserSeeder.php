<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();
        User::create(['username' => 'admin', 'password' => 'admin', 'name' => 'admin', 'role' => 'admin']);
        User::create(['username' => 'author', 'password' => 'author', 'name' => 'author', 'role' => 'author']);
    }
}
