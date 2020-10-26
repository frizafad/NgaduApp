<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BidangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        DB::table('bidang')->insert([
            'nama_bidang'=>'keamanan',
            ]);
        DB::table('bidang')->insert([
            'nama_bidang'=>'kebersihan',
            ]);
        DB::table('bidang')->insert([
            'nama_bidang'=>'infrastruktur',
            ]);
    }
}
