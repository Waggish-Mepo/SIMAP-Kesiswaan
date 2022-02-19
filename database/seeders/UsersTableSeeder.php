<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_user')->insert([
            'userable_id' => '1',
            'email' => 'john@doe.com',
            'password' => Hash::make('test123'),
            'role'=>'murid',
        ]);
    }
}
