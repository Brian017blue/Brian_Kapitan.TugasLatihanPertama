<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dosen;


class DummyDosen extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosenData = [            

                [
                'user_id' => '323',                    
                'kode_dosen' => '7773',
                'nip' => '54323',
                'name' => 'dosen3',
                            ],

                [
                'user_id' => '324',                   
                'kode_dosen' => '7774',
                'nip' => '54324',
                'name' => 'dosen4',
                ],
    
                    [
                    'user_id' => '325',                        
                    'kode_dosen' => '7775',
                    'nip' => '54325',
                    'name' => 'dosen5',
                                ],
                    ];
    

                foreach($dosenData as $key => $val) {
                    Dosen::create($val);
                }

    }
}
