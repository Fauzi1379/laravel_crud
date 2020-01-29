<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MobilsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        $v = $faker->vehicleArray();
        for($i = 1; $i <= 50; $i++)    {
        DB::table('mobils')->insert([
        	'nama_kendarann' => 'ford',
        	'teacher_id' => $faker->numberBetween(5,55),
        	'no_polisi' => $faker->numberBetween(25,100),
            'warna' => $faker->safeColorName ,
            
        ]);
        }
    }
}
