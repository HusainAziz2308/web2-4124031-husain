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
                'semester' => '4',
                'keahlian' => [
                    'Desain Basis Data',
                    'HTML'
                ],
            ],
            [
                'nama' => 'Husain Aziz Al Rosyid',
                'nim' => '4124031',
                'program_studi' => 'Sistem Informasi',
                'semester' => '4',
                'keahlian' => [
                    'Pemrograman Web',
                    'Desain UI/UX',
                    'Github Project Management',
                    'Jaringan Komputer'
                ],
            ],
            [
                'nama' => 'Affani Yusuf',
                'nim' => '4119064',
                'program_studi' => 'Sistem Informasi',
                'semester' => '10',
                'keahlian' => [
                    'Pemrograman Web',
                    'Basis Data',
                    'Jaringan Komputer'
                ],
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
                'semester' => '4',
                'keahlian' => [
                    'Desain Basis Data',
                    'HTML'
                ],
            ],
            [
                'nama' => 'Husain Aziz Al Rosyid',
                'nim' => '4124031',
                'program_studi' => 'Sistem Informasi',
                'semester' => '4',
                'keahlian' => [
                    'Pemrograman Web',
                    'Desain UI/UX',
                    'Github Project Management',
                    'Jaringan Komputer'
                ],
            ],
            [
                'nama' => 'Affani Yusuf',
                'nim' => '4119064',
                'program_studi' => 'Sistem Informasi',
                'semester' => '10',
                'keahlian' => [
                    'Pemrograman Web',
                    'Basis Data',
                    'Jaringan Komputer'
                ],
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
