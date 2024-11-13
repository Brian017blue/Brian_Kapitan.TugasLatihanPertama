<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kaprodi;


class DummyKaprodi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kaprodiData = [
            [
                'user_id' => '327',
            'kode_dosen' => '1777',
            'nip' => '54327',
            'name' => 'kaprodi',
            ],
        ];
            foreach($kaprodiData as $key => $val) {
                kaprodi::create($val);
            }

    }
}
