<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            'name' => 'Natanael',
            'email' => 'tambunnatanael55@gmail.com',
            'nama_lengkap' => 'Natanael Tambun',
            'alamat' => 'Silombu',
            'role' => 0,
            'role_name' => 'Penyewa',
            'no_telephone' => '085216250314',
            'password' => Hash::make('12345'),
        ]);
        DB::table('users')->insert([
            'name' => 'Badang',
            'email' => 'natanaeltambun9@gmail.com',
            'nama_lengkap' => 'Badang',
            'alamat' => 'Silombu',
            'role' => 1,
            'role_name' => 'Operator',
            'no_telephone' => '085216250314',
            'password' => Hash::make('12345'),
        ]);
        DB::table('users')->insert([
            'name' => 'Gabriel',
            'email' => 'gabriel12@gmail.com',
            'nama_lengkap' => 'Gabriel Baringbing',
            'alamat' => 'Silombu',
            'role' => 2,
            'role_name' => 'Admin',
            'no_telephone' => '085216250314',
            'password' => Hash::make('12345'),
        ]);
        DB::table('users')->insert([
            'name' => 'Andi',
            'email' => 'andi2@gmail.com',
            'nama_lengkap' => 'Andi Tambun',
            'alamat' => 'Silombu',
            'role' => 3,
            'role_name' => 'Supir',
            'no_telephone' => '085216250314',
            'password' => Hash::make('12345'),
        ]);
    }
}
