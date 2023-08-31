<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        'name' => 'Laura Mazoni',
        'email' => 'lauramazoni1999@gmail.com',
        'password' => bcrypt('12345678'),
        'is_admin' => true,
        ]);
    
    }
}
