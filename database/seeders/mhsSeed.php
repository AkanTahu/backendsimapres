<?php

namespace Database\Seeders;
use App\Models\api_data;
use App\Models\sertifikat;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'ipk' => 4,
            'alpha' => 1,
            'sertifikat' => '0',
            'spk' => 0,
            'username' => '',
            'password' => '',
            'ipkORI' => 3.4,
            'alphaORI' => 2,
            'gambar' => '',
        ]);

        api_data::create([
            'nama' => 'Anjali Anjas',
            'nim' => 21002,
            'prodi' => 'D3-AB',
            'jurusan' => 'AN',
            'tahunMasuk' => 21,
            'ipk' => 2,
            'alpha' => 3,
            'sertifikat' => '0',
            'spk' => 0,
            'username' => 'a',
            'password' => '1',
            'ipkORI' => 2.8,
            'alphaORI' => 3,
            'gambar' => '',
        ]);

        api_data::create([
            'nama' => 'Mahmud Sudarsono',
            'nim' => 21003,
            'prodi' => 'D4-SIB',
            'jurusan' => 'TI',
            'tahunMasuk' => 21,
            'ipk' => 3,
            'alpha' => 2,
            'sertifikat' => '0',
            'spk' => 0,
            'username' => 'b',
            'password' => '1',
            'ipkORI' => 3.2,
            'alphaORI' => 6,
            'gambar' => '',
        ]);

        api_data::create([
            'nama' => 'Agus Pripun',
            'nim' => 21004,
            'prodi' => 'D3-TT',
            'jurusan' => 'TE',
            'tahunMasuk' => 21,
            'ipk' => 3,
            'alpha' => 3,
            'sertifikat' => '0',
            'spk' => 0,
            'username' => '',
            'password' => '',
            'ipkORI' => 3.3,
            'alphaORI' => 10,
            'gambar' => '',
        ]);

        api_data::create([
            'nama' => 'Priadi Sucipto',
            'nim' => 21005,
            'prodi' => 'D4-JTD',
            'jurusan' => 'TE',
            'tahunMasuk' => 21,
            'ipk' => 3,
            'alpha' => 4,
            'sertifikat' => '0',
            'spk' => 0,
            'username' => '',
            'password' => '',
            'ipkORI' => 3.2,
            'alphaORI' => 15,
            'gambar' => '',
        ]);

        api_data::create([
            'nama' => 'Sukma Duardi',
            'nim' => 20001,
            'prodi' => 'D4-AKM',
            'jurusan' => 'AK',
            'tahunMasuk' => 20,
            'ipk' => 4,
            'alpha' => 2,
            'sertifikat' => '0',
            'spk' => 0,
            'username' => '',
            'password' => '',
            'ipkORI' => 3.4,
            'alphaORI' => 2,
            'gambar' => '',
        ]);

        api_data::create([
            'nama' => 'Riski Bahar',
            'nim' => 21006,
            'prodi' => 'D3-TK',
            'jurusan' => 'TK',
            'tahunMasuk' => 21,
            'ipk' => 5,
            'alpha' => 1,
            'sertifikat' => '0',
            'spk' => 0,
            'username' => '',
            'password' => '',
            'ipkORI' => 3.7,
            'alphaORI' => 2,
            'gambar' => '',
        ]);

        sertifikat::create([
            'nim_mhs' => 21002,
            'namaSertif' => 'Sertif Anjali',
            'tingkatSertif' => 'Nasional',
            'juaraSertif' => '1',
            'tanggalSertif' => '2023-11-10',
            'gambarSertif' => '',
        ]);

        sertifikat::create([
            'nim_mhs' => 21003,
            'namaSertif' => 'Sertif Sudarsono',
            'tingkatSertif' => 'Provinsi',
            'juaraSertif' => '2',
            'tanggalSertif' => '2023-11-6',
            'gambarSertif' => '',
        ]);
    }
}