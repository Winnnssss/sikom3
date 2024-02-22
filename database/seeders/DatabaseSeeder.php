<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'username' => 'admin1',
            'email' => 'cas@gmail.com',
            'password' => Hash::make('12345678'),
            'nama_lengkap' => 'amin_satu',
            'role' => 'administrator',
            'verifikasi' => 'sudah',
            'alamat' => 'subang',
        ]);
    }
}
