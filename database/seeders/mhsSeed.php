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
            'prodi' => 'D3 TM',
            'jurusan' => 'Teknik Mesin',
            'tahunMasuk' => 21,
            'ipk' => 3.82,
            'alpha' => '1',
            'sertifikat' => '3',
            'spk' => '90',
            'username' => '',
            'password' => '',
        ]);

        api_data::create([
            'nama' => 'Anjali Anjas',
            'nim' => 21002,
            'prodi' => 'D3 AB',
            'jurusan' => 'Adminitrasi Bisnis',
            'tahunMasuk' => 21,
            'ipk' => 3.85,
            'alpha' => '6',
            'sertifikat' => '4',
            'spk' => '85',
            'username' => '',
            'password' => '',
        ]);

        api_data::create([
            'nama' => 'Mahmud Sudarsono',
            'nim' => 21003,
            'prodi' => 'D4 SIB',
            'jurusan' => 'Teknologi Informai',
            'tahunMasuk' => 21,
            'ipk' => 3.6,
            'alpha' => '2',
            'sertifikat' => '6',
            'spk' => '87',
            'username' => '',
            'password' => '',
        ]);

        api_data::create([
            'nama' => 'Agus Pripun',
            'nim' => 21004,
            'prodi' => 'D3 TT',
            'jurusan' => 'Teknik Elektro',
            'tahunMasuk' => 21,
            'ipk' => 3.9,
            'alpha' => '7',
            'sertifikat' => '6',
            'spk' => '98',
            'username' => '',
            'password' => '',
        ]);

        api_data::create([
            'nama' => 'Priadi Sucipto',
            'nim' => 21005,
            'prodi' => 'D4 JTD',
            'jurusan' => 'Teknik Elektro',
            'tahunMasuk' => 21,
            'ipk' => 3.7,
            'alpha' => '2',
            'sertifikat' => '6',
            'spk' => '83',
            'username' => '',
            'password' => '',
        ]);

        api_data::create([
            'nama' => 'Sukma Duardi',
            'nim' => 20001,
            'prodi' => 'D4 AKM',
            'jurusan' => 'Akuntansi',
            'tahunMasuk' => 20,
            'ipk' => 3.8,
            'alpha' => '2',
            'sertifikat' => '2',
            'spk' => '88',
            'username' => '',
            'password' => '',
        ]);

        api_data::create([
            'nama' => 'Riski Bahar',
            'nim' => 21006,
            'prodi' => 'D3 TK',
            'jurusan' => 'Teknik Kimia',
            'tahunMasuk' => 21,
            'ipk' => 3.8,
            'alpha' => '1',
            'sertifikat' => '2',
            'spk' => '87',
            'username' => '',
            'password' => '',
        ]);
    }
}