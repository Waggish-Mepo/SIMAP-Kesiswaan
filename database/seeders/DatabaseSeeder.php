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
            [
                'username' => 'admin',
                'role' => 'admin',
                'sub_role' => null,
                'email'=>'admin@wikrama.com',
                'password' => Hash::make('admin'),
            ],
            [
                'username' => 'guru',
                'role' => 'guru',
                'sub_role' => null,
                'email'=>'guru@wikrama.com',
                'password' => Hash::make('guru'),
            ],
            [
                'username' => 'pemray',
                'role' => 'guru',
                'sub_role' => 'pemray',
                'email'=>'kesiswaan@wikrama.com',
                'password' => Hash::make('pemray'),
            ]
        ]);

        DB::table('m_teacher')->insert([
            [
                'nama' => 'Budiono',
                'email'=>'budiono@wikrama.com',
            ]
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
