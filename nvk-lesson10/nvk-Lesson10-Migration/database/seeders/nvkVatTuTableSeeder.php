<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class nvkVatTuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DB::table('nvkvattu')->insert([
            //'nvkMaVT'=>'DD01',
            //'nvkTenVT'=>'Đầu DVD Hitachi 1 cửa',
            //'nvkDVT'=>'Bộ',
            //'nvkPhanTram'=>40,
            //]);
        //DB::table('nvkvattu')->insert([
            //'nvkMaVT'=>'BM09',
            //'nvkTenVT'=>'Black Magic 9 Pro 32GB/512GB',
            //'nvkDVT'=>'Chiếc',
            //'nvkPhanTram'=>16,
            //]);

            $faker = Faker::create();
            foreach(range(1,100)as $index){
                DB::table('nvkvattu') -> insert([
                'nvkMaVT'=>$faker->word(4),
                // 'MaNCC'=>$faker->word(15),
                'nvkTenVT'=>$faker->sentence(5),
                'nvkDVT'=>$faker->word(3),
                'nvkPhanTram'=>$faker->randomFloat(2,0,100)
                ]); 
            }
    }
}
