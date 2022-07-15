<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class customersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table('customers')->insert([
                'name' => $faker->name(),
                'gender' => $faker->name(),
                'email' => $faker->unique->email,
                'address' => $faker->name(),
                'phonenumber' => $faker->numerify($string = '###'),
                'note' => $faker->sentence,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
