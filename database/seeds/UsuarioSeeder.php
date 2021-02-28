<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jesus',
            'email' => 'corre@correo.com',
            'password' => Hash::make('12345678'),
            'url' => 'http://codigoconjesus.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('users')->insert([
            'name' => 'Jesus',
            'email' => 'corre2@correo.com',
            'password' => Hash::make('12345678'),
            'url' => 'http://codigoconjesus.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
    }
}
