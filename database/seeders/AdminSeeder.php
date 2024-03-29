<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Sofia Haven",
            'first_name' => "Sofia",
            'last_name' => 'Haven',
            'email' => 'sofiahaven@gmail.com',
            'password' => Hash::make('sofia123@haven'),
            'accesslevel' => 'admin',
        ]);
    }
}
