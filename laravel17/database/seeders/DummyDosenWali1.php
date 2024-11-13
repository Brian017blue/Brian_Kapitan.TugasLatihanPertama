<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyDosenWali1 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $dosenData = [
                [
                    'user_id' => '321',
                    'kelas_id' => '771',
                'kode_dosen' => '7771',
                'nip' => '54321',
                'name' => 'dosen_wali1',
                ],                    
                        ];
        
    
                    foreach($dosenData as $key => $val) {
                        Dosen::create($val);
                    }
    
        
    }
}
