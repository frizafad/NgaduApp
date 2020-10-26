<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory as Faker;

class MasalahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //data faker indonesia
        $faker = Faker::create('id_ID');

        for($i=1; $i<=10; $i++) { 
            DB::table('masalah')->insert([
            'problem_masalah' => $faker->Text,
            'id_bidang'       => $faker->numberBetween(1,3),
            'id_user'         => $faker->numberBetween(1,20),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ]);
        }
    }
}
