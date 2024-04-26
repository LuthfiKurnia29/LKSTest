<?php

namespace Database\Seeders;

use App\Models\Akun;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('akuns')->delete();
        Akun::create(['username' => 'admin', 'password' => 'admin', 'name' => 'admin', 'role' => 'admin']);
        Akun::create(['username' => 'author', 'password' => 'author', 'name' => 'author', 'role' => 'author']);
    }
}
