<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MBarber;
use Faker\Factory as Faker;

class BarberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            MBarber::create([
                'img_file' => $faker->imageUrl(640, 480),
                'nama' => $faker->sentence(),
                'nomor_telepon' => $faker->phoneNumber,
                'email' => $faker->email,
                'alamat' => $faker->address,
            ]);
        }
    }
}
