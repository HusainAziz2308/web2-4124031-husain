<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            [
                'nama' => 'Nukhi Alvin Rahmahdani',
                'nim' => '4124044',
                'program_studi' => 'Sistem Informasi',
            ],
            [
                'nama' => 'Husain Aziz Al Rosyid',
                'nim' => '4124031',
                'program_studi' => 'Sistem Informasi',
            ],
            [
                'nama' => 'Affani Yusuf',
                'nim' => '4119064',
                'program_studi' => 'Sistem Informasi',
            ]
        ];

        return view('profil', compact('mahasiswa'));
    }

    public function show($nim)
    {
        $data = [
            [
                'nama' => 'Nukhi Alvin Rahmahdani',
                'nim' => '4124044',
                'program_studi' => 'Sistem Informasi',
            ],
            [
                'nama' => 'Husain Aziz Al Rosyid',
                'nim' => '4124031',
                'program_studi' => 'Sistem Informasi',
            ],
            [
                'nama' => 'Affani Yusuf',
                'nim' => '4119064',
                'program_studi' => 'Sistem Informasi',
            ]
        ];

        foreach ($data as $mhs) {
            if ($mhs['nim'] == $nim) {
                return view('detail_profil', ['mahasiswa' => $mhs]);
            }
        }

        abort(404);
    }
}
