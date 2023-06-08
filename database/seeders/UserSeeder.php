<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                "prenom"=>"med",
                "nom"=>"ben",
                "email"=>"med@admin.com",
                "phone"=>"0602010504",
                "password"=>Hash::make('admin'),
                "role"=>"admin"
            ],
            [
                "prenom"=>"malak",
                "nom"=>"blghiti",
                "email"=>"blghiti@gmail.com",
                "phone"=>"0602010504",
                "password"=>Hash::make('client01'),
                "role"=>"client"
            ],
            [
                "prenom"=>"bilal",
                "nom"=>"motaraji",
                "email"=>"motaraji@gmail.com",
                "phone"=>"0602010504",
                "password"=>Hash::make('client01'),
                "role"=>"admin"
            ],
            [
                "prenom"=>"med",
                "nom"=>"folane",
                "email"=>"folane@gmail.com",
                "phone"=>"0602010504",
                "password"=>Hash::make('client01'),
                "role"=>"client"
            ],
        ]);
    }
}
