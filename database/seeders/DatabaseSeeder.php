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
                'email'=>'pemray@wikrama.com',
                'password' => Hash::make('pemray'),
            ]
        ]);

        DB::table('m_teacher')->insert([
            [
                'nama' => 'Budiono',
                'no_induk_yayasan' => '00000001',
                'email'=>'budiono@wikrama.com',
            ]
        ]);

        DB::table('m_rombel')->insert([
            [
                'rombel' => 'RPL XII-1',
                'kompetensi'=>'RPL',
                'angkatan_id' => '4',
            ],
            [
                'rombel' => 'RPL XII-2',
                'kompetensi'=>'RPL',
                'angkatan_id' => '4',
            ],
            [
                'rombel' => 'RPL XII-3',
                'kompetensi'=>'RPL',
                'angkatan_id' => '4',
            ],
            [
                'rombel' => 'RPL XII-4',
                'kompetensi'=>'RPL',
                'angkatan_id' => '4',
            ],
            [
                'rombel' => 'TKJ XII-1',
                'kompetensi'=>'TKJ',
                'angkatan_id' => '4',
            ],
            [
                'rombel' => 'TKJ XII-2',
                'kompetensi'=>'TKJ',
                'angkatan_id' => '4',
            ],
            [
                'rombel' => 'TKJ XII-3',
                'kompetensi'=>'TKJ',
                'angkatan_id' => '4',
            ],
            [
                'rombel' => 'TKJ XII-4',
                'kompetensi'=>'TKJ',
                'angkatan_id' => '4',
            ],
            [
                'rombel' => 'MMD XII-1',
                'kompetensi'=>'MMD',
                'angkatan_id' => '4',
            ],
            [
                'rombel' => 'MMD XII-2',
                'kompetensi'=>'MMD',
                'angkatan_id' => '4',
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

        DB::table('m_rayon')->insert([
            [
                'rayon' => 'Cicurug 1'
            ],
            [
                'rayon' => 'Cicurug 2'
            ],
            [
                'rayon' => 'Cicurug 3'
            ],
            [
                'rayon' => 'Cicurug 4'
            ],
            [
                'rayon' => 'Cicurug 5'
            ],
            [
                'rayon' => 'Cicurug 6'
            ],
            [
                'rayon' => 'Cicurug 7'
            ],
        ]);

        DB::table('m_mapel')->insert([
            [
                'mapel' => 'Bahasa Indonesia',
            ],
            [
                'mapel' => 'Bahasa Inggris',
            ],
            [
                'mapel' => 'Matematika',
            ],
            [
                'mapel' => 'Kimia',
            ],
            [
                'mapel' => 'Fisika',
            ],
            [
                'mapel' => 'Pendidikan Pancasila dan Kewarganegaraan',
            ],
            [
                'mapel' => 'Biologi',
            ],
            [
                'mapel' => 'Geografi',
            ],
            [
                'mapel' => 'Sejarah',
            ],
            [
                'mapel' => 'PKK',
            ],
            [
                'mapel' => 'Pemrograman',
            ],
            [
                'mapel' => 'Pendidikan Jasmani, Olahraga dan Kesehatan'
            ]
        ]);
    }
}
