<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reservations')->insert([
            [
                "post_id"=>1,
                "user_id"=>2,
                "date_debut"=>'2023/05/22',
                "date_fin"=>'2023/05/30',
                "jours"=>6,
                "montant"=>10
            ],
            [
                "post_id"=>2,
                "user_id"=>2,
                "date_debut"=>'2023/06/01',
                "date_fin"=>'2023/06/22',
                "jours"=>6,
                "montant"=>10
            ],
            [
                "post_id"=>2,
                "user_id"=>4,
                "date_debut"=>'2023/05/22',
                "date_fin"=>'2023/05/30',
                "jours"=>6,
                "montant"=>10
            ]
        ]);
    }
}
