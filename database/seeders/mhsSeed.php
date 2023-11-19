<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\api_data;

class mhsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       api_data::create([
            'nama' => 'Riski Mansur',
            'nim' => 21001,
            'prodi' => 'D3-TM',
            'jurusan' => 'TM',
            'tahunMasuk' => 21,
            'ipk' => '5',
            'alpha' => '1',
            'sertifikat' => '3',
            'spk' => 0,
            'username' => '',
            'password' => '',
        ]);

        api_data::create([
            'nama' => 'Anjali Anjas',
            'nim' => 21002,
            'prodi' => 'D3-AB',
            'jurusan' => 'AN',
            'tahunMasuk' => 21,
            'ipk' => '2',
            'alpha' => '6',
            'sertifikat' => '4',
            'spk' => 0,
            'username' => '',
            'password' => '',
        ]);

        api_data::create([
            'nama' => 'Mahmud Sudarsono',
            'nim' => 21003,
            'prodi' => 'D4-SIB',
            'jurusan' => 'TI',
            'tahunMasuk' => 21,
            'ipk' => '12',
            'alpha' => '2',
            'sertifikat' => '6',
            'spk' => 0,
            'username' => '',
            'password' => '',
        ]);

        api_data::create([
            'nama' => 'Agus Pripun',
            'nim' => 21004,
            'prodi' => 'D3-TT',
            'jurusan' => 'TE',
            'tahunMasuk' => 21,
            'ipk' => '3',
            'alpha' => '7',
            'sertifikat' => '6',
            'spk' => 0,
            'username' => '',
            'password' => '',
        ]);

        api_data::create([
            'nama' => 'Priadi Sucipto',
            'nim' => 21005,
            'prodi' => 'D4-JTD',
            'jurusan' => 'TE',
            'tahunMasuk' => 21,
            'ipk' => '3',
            'alpha' => '2',
            'sertifikat' => '6',
            'spk' => 0,
            'username' => '',
            'password' => '',
        ]);

        api_data::create([
            'nama' => 'Sukma Duardi',
            'nim' => 20001,
            'prodi' => 'D4-AKM',
            'jurusan' => 'AK',
            'tahunMasuk' => 20,
            'ipk' => '4',
            'alpha' => '2',
            'sertifikat' => '2',
            'spk' => 0,
            'username' => '',
            'password' => '',
        ]);

        api_data::create([
            'nama' => 'Riski Bahar',
            'nim' => 21006,
            'prodi' => 'D3-TK',
            'jurusan' => 'TK',
            'tahunMasuk' => 21,
            'ipk' => '5',
            'alpha' => '1',
            'sertifikat' => '2',
            'spk' => 0,
            'username' => '',
            'password' => '',
        ]);
    }
}