<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i<=20 ; $i++) { 
            DB::table('warga')->insert([
            'identitas_warga'=>$faker->ean8,
            'nama_warga'=>$faker->name,
            'telepon_warga'=>$faker->phoneNumber,
            'alamat_warga'=>$faker->address,
            'id_user'=>$faker->numberBetween(1,20),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ]);
        }

    }
}
