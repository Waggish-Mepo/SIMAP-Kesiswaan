<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Hash;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Rayon;
use App\Models\Rombel;

class TeacherProfileImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            $rombel = Rombel::where('rombel',$row['rombel'])->first();
            $rayon = Rayon::where('rayon',$row['rayon'])->first();
            Student::create([
                'nama' => $row['nama'],
                'email' => $row['email'],
                'jk' => $row['jk'],
                'no_hp' => $row['no_hp'],
                'nuptk'=>$row['nuptk'],
                'nik'=>$row['nik'],
                'no_induk_yayasan'=>$row['no_induk_yayasan'],
                'no_ukg'=>$row['no_ukg'],
                'jk'=>$row['jk'],
                'mata_pelajaran'=>$row['mata_pelajaran'],
            ]);

            User::create([
                'userable_id' => $row['no_induk_yayasan'],
                'role' => 'murid',
                'email' => $row['email'],
                'password'=>Hash::make($row['no_induk_yayasan']),
            ]);
        }
    }
}
