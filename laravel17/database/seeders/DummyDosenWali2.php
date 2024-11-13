<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyDosenWali2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosenData = [
            [
                'user_id' => '322',
                'kelas_id' => '772',
            'kode_dosen' => '7772',
            'nip' => '54322',
            'name' => 'dosen_wali2',
            ],                    
                    ];
    

                foreach($dosenData as $key => $val) {
                    Dosen::create($val);
                }

    }
}
