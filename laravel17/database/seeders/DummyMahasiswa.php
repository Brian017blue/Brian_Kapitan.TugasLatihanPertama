<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;


class DummyMahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswaData = [
            [
            'user_id' => User::where('username', 'mahasiswa1')->first()->id,
            'kelas_id' => '772',
            'nim' => '21541',
            'name' => 'mahasiswa1',
            'tempat_lahir' => 'jogja',
            'tanggal_lahir' => '2002-02-07',
            ],

            [
                'user_id' => User::where('username', 'mahasiswa2')->first()->id,
                'kelas_id' => '771',
            'nim' => '21542',
            'name' => 'mahasiswa2',
            'tempat_lahir' => 'solo',
            'tanggal_lahir' => '2003-01-17',
            ],

            [
                'user_id' => User::where('username', 'mahasiswa3')->first()->id,
                'kelas_id' => '772',
            'nim' => '21543',
            'name' => 'mahasiswa3',
            'tempat_lahir' => 'semarang',
            'tanggal_lahir' => '2001-12-05',
            ],

            [
                'user_id' => User::where('username', 'mahasiswa4')->first()->id,
                'kelas_id' => '771',
            'nim' => '21544',
            'name' => 'mahasiswa4',
            'tempat_lahir' => 'bali',
            'tanggal_lahir' => '2004-02-17',
            ],

            [
                'user_id' => User::where('username', 'mahasiswa5')->first()->id,
                'kelas_id' => '772',
            'nim' => '21545',
            'name' => 'mahasiswa5',
            'tempat_lahir' => 'surabaya',
            'tanggal_lahir' => '2001-05-11',
            ],

            [
                'user_id' => User::where('username', 'mahasiswa6')->first()->id,
                'kelas_id' => '771',
            'nim' => '21546',
            'name' => 'mahasiswa6',
            'tempat_lahir' => 'malang',
            'tanggal_lahir' => '2002-10-25',
            ],

            [
                'user_id' => User::where('username', 'mahasiswa7')->first()->id,
                'kelas_id' => '772',
            'nim' => '21547',
            'name' => 'mahasiswa7',
            'tempat_lahir' => 'kudus',
            'tanggal_lahir' => '2003-01-29',
            ],

            [
                'user_id' => User::where('username', 'mahasiswa8')->first()->id,
                'kelas_id' => '771',
            'nim' => '21548',
            'name' => 'mahasiswa8',
            'tempat_lahir' => 'blitar',
            'tanggal_lahir' => '2004-08-23',
            ],

            [
                'user_id' => User::where('username', 'mahasiswa9')->first()->id,
                'kelas_id' => '772',
            'nim' => '21549',
            'name' => 'mahasiswa9',
            'tempat_lahir' => 'klaten',
            'tanggal_lahir' => '2004-05-27',
            ],

            [
                'user_id' => User::where('username', 'mahasiswa10')->first()->id,
                'kelas_id' => '771',
            'nim' => '21550',
            'name' => 'mahasiswa10',
            'tempat_lahir' => 'bandung',
            'tanggal_lahir' => '2003-11-13',
            ],

            [
                'user_id' => User::where('username', 'mahasiswa11')->first()->id,
                'kelas_id' => '772',
            'nim' => '21551',
            'name' => 'mahasiswa11',
            'tempat_lahir' => 'jakarta pusat',
            'tanggal_lahir' => '2002-04-15',
            ],

            [
                'user_id' => User::where('username', 'mahasiswa12')->first()->id,
                'kelas_id' => '771',
            'nim' => '21552',
            'name' => 'mahasiswa12',
            'tempat_lahir' => 'bangka',
            'tanggal_lahir' => '2001-12-31',
            ],

            [
                'user_id' => User::where('username', 'mahasiswa13')->first()->id,
                'kelas_id' => '772',
            'nim' => '21553',
            'name' => 'mahasiswa13',
            'tempat_lahir' => 'kalimantan barat',
            'tanggal_lahir' => '2002-07-09',
            ],

            [
                'user_id' => User::where('username', 'mahasiswa14')->first()->id,
                'kelas_id' => '771',
            'nim' => '21554',
            'name' => 'mahasiswa14',
            'tempat_lahir' => 'sulawesi barat',
            'tanggal_lahir' => '2004-02-26',
            ],

            [
                'user_id' => User::where('username', 'mahasiswa15')->first()->id,
                'kelas_id' => '772',
            'nim' => '21555',
            'name' => 'mahasiswa15',
            'tempat_lahir' => 'kalimantan selatan',
            'tanggal_lahir' => '2001-04-07',
            ],

            [
                'user_id' => User::where('username', 'mahasiswa16')->first()->id,
                'kelas_id' => '771',
            'nim' => '21556',
            'name' => 'mahasiswa16',
            'tempat_lahir' => 'tangerang',
            'tanggal_lahir' => '2003-01-27',
            ],

            [
                'user_id' => User::where('username', 'mahasiswa17')->first()->id,
                'kelas_id' => '772',
            'nim' => '21557',
            'name' => 'mahasiswa17',
            'tempat_lahir' => 'jakarta barat',
            'tanggal_lahir' => '2004-02-16',
            ],

            [
                'user_id' => User::where('username', 'mahasiswa18')->first()->id,
                'kelas_id' => '771',
            'nim' => '21558',
            'name' => 'mahasiswa18',
            'tempat_lahir' => 'jakarta selatan',
            'tanggal_lahir' => '2002-04-07',
            ],

            [
                'user_id' => User::where('username', 'mahasiswa19')->first()->id,
                'kelas_id' => '772',
            'nim' => '21559',
            'name' => 'mahasiswa19',
            'tempat_lahir' => 'sulawesi selatan',
            'tanggal_lahir' => '2003-12-17',
            ],

            [
                'user_id' => User::where('username', 'mahasiswa20')->first()->id,
                'kelas_id' => '771',
            'nim' => '21560',
            'name' => 'mahasiswa20',
            'tempat_lahir' => 'jakarta timur',
            'tanggal_lahir' => '2004-10-18',
            ],

                    ];
    

                foreach($mahasiswaData as $key => $data) {
                    Mahasiswa::create($data);
                }

    }
}

