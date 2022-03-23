<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'prenom'=>'Baba',
                'nom'=>'NGOM',
                'photo'=>'backend/assets/images/attached-1.jpg',
                'email'=>'contact@ameenaltech.com',
                // 'telephone'=>'772050626',
                // 'adresse'=>'Ouest Foire',
                'password'=>Hash::make('ALAMEENjr@7'),
            ]
        ]);
    }
}
