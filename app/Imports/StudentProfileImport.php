<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
use App\Models\User;
use App\Models\Rayon;
use App\Models\Rombel;

class StudentProfileImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            $rombel = Rombel::where('rombel',$row['rombel'])->first();
            $rayon = Rayon::where('rayon',$row['rayon'])->first();
            Student::create([
                'nama' => $row['nama'],
                'rombel_id' => $rombel['id'],
                'rayon_id' => $rayon['id'],
                'email' => $row['email'],
                'jenis_kelamin' => $row['jenis_kelamin'],
                'no_hp' => $row['no_hp'],
                'nis' => $row['nis'],
                'nisn' => $row['nisn'],
                'nik' => $row['nik'],
            ]);

            User::create([
                'userable_id' => $row['nis'],
                'role' => 'murid',
                'email' => $row['email'],
                'password'=>Hash::make($row['nis']),
            ]);
        }
    }
}
