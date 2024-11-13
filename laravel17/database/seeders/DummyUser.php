<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class DummyUser extends Seeder
{
   
    public function run(): void
    {
        $userData = [
            
            [
                'username' => 'dosen_wali1',
            'email' => 'dosen1@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'dosenwali1',
            ],

            [
                'username' => 'dosen_wali2',
            'email' => 'dosen2@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'dosenwali2',
            ],

            [
                'username' => 'dosen3',
            'email' => 'dosen3@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'dosen',
            ],

            [
                'username' => 'dosen4',
            'email' => 'dosen4@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'dosen',
            ],

            [
                'username' => 'dosen5',
            'email' => 'dosen5@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'dosen',
            ],

            [
                'username' => 'kaprodi',
            'email' => 'kaprodi@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'kaprodi',
            ],

            
            [
            'username' => 'mahasiswa1',
            'email' => 'mahasiswa1@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'mahasiswa',
            ],

            [
            'username' => 'mahasiswa2',
            'email' => 'mahasiswa2@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'mahasiswa',
            ],

            [
            'username' => 'mahasiswa3',
            'email' => 'mahasiswa3@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'mahasiswa',
            ],

            [
            'username' => 'mahasiswa4',
            'email' => 'mahasiswa4@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'mahasiswa',
            ],

            [
            'username' => 'mahasiswa5',
            'email' => 'mahasiswa5@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'mahasiswa',
            ],

            [
            'username' => 'mahasiswa6',
            'email' => 'mahasiswa6@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'mahasiswa',
            ],

            [
            'username' => 'mahasiswa7',
            'email' => 'mahasiswa7@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'mahasiswa',
            ],

            [
            'username' => 'mahasiswa8',
            'email' => 'mahasiswa8@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'mahasiswa',
            ],

            [
            'username' => 'mahasiswa9',
            'email' => 'mahasiswa9@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'mahasiswa',
            ],


            [
            'username' => 'mahasiswa10',
            'email' => 'mahasiswa10@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'mahasiswa',
            ],

            [
            'username' => 'mahasiswa11',
            'email' => 'mahasiswa11@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'mahasiswa',
            ],


            [
            'username' => 'mahasiswa12',
            'email' => 'mahasiswa12@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'mahasiswa',
            ],


            [
            'username' => 'mahasiswa13',
            'email' => 'mahasiswa13@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'mahasiswa',
            ],


            [
            'username' => 'mahasiswa14',
            'email' => 'mahasiswa14@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'mahasiswa',
            ],


            [
            'username' => 'mahasiswa15',
            'email' => 'mahasiswa15@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'mahasiswa',
            ],


            [
            'username' => 'mahasiswa16',
            'email' => 'mahasiswa16@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'mahasiswa',
            ],


            [
            'username' => 'mahasiswa17',
            'email' => 'mahasiswa17@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'mahasiswa',
            ],


            [
            'username' => 'mahasiswa18',
            'email' => 'mahasiswa18@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'mahasiswa',
            ],


            [
            'username' => 'mahasiswa19',
            'email' => 'mahasiswa19@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'mahasiswa',
            ],


            [
                'username' => 'mahasiswa20',
            'email' => 'mahasiswa20@gmail.com',
            'password' => bcrypt('psswrd'),
            'role' => 'mahasiswa',
                    ],

                        
                ];

                foreach($userData as $key => $val) {
                    User::create($val);
                }
    }
}
