<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;


class UserSeeder extends Seeder
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
            DB::table('users')->insert([
            'name'=>$faker->name,
            'email'=>$faker->email,
            'password'=>$faker->password,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ]);
        }
    }
}
