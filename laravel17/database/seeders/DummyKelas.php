<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyKelas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelasData = [
            [
                'id' => '771',
                'name' => 'kelas1',
            'jumlah' => '10',
            ],
            [
                'id' => '772',
                'name' => 'kelas2',
            'jumlah' => '10',
            ],
        ];
            foreach($kelasData as $key => $val) {
                Kelas::create($val);
            }

    }
}
