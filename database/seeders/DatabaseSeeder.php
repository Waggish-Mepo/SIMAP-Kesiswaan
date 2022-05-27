<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('m_user')->insert([
            'username' => 'admin',
            'email'=>'admin@wikrama.com',
            'password' => Hash::make('admin'),
        ]);
        
        DB::table('m_rombel')->insert([
            [
                'rombel' => 'RPL XII',
                'kompetensi'=>'RPL',
                'angkatan_id' => '4',
            ],
            [
                'rombel' => 'TKJ XII',
                'kompetensi'=>'TKJ',
                'angkatan_id' => '4',
            ],
            [
                'rombel' => 'MMD XII',
                'kompetensi'=>'MMD',
                'angkatan_id' => '4',
            ],
        ]);

        DB::table('m_rayon')->insert([
            [
                'rayon' => 'Cicurug',
                'teacher_id' => '1'
            ],
            [
                'rayon' => 'Tajur',
                'teacher_id' => '2'
            ],
            [
                'rayon' => 'Cisarua',
                'teacher_id' => '3'
            ],
        ]);

        DB::table('m_batch')->insert([
            [
                'angkatan' => '2018-2019'
            ],
            [
                'angkatan' => '2019-2020'
            ],
            [
                'angkatan' => '2020-2021'
            ],
            [
                'angkatan' => '2021-2022'
            ],
        ]);
    }
}
