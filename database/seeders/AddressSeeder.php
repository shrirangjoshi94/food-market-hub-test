<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Address;
use Faker\Factory;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            Address::create(
                [
                    'house_name_number' => $faker->address(),
                    'post_code' => $faker->postcode(),
                ]
            );
        }
    }
}
