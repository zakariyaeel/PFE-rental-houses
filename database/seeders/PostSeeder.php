<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                "image"=>"imgs/posts/default.jpg",
                "titre"=>"Riad salam, Fes",
                "description"=>"Au centre de la ville",
                "adress"=>"Fes Medina",
                "prix"=>39,
                "etat"=>false,
                "type_id"=>1
            ],
            [
                "image"=>"imgs/posts/default.jpg",
                "titre"=>"Riad lmasira, Fes",
                "description"=>"Au centre de la ville",
                "adress"=>"Fes Medina",
                "prix"=>23,
                "etat"=>false,
                "type_id"=>2
            ]
        ]);
    }
}
