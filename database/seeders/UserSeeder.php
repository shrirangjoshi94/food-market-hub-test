<?php

declare(strict_types=1);

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Support\Arr;
use App\Models\{Phone, User};
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the users table.
     *
     * @return void
     */
    public function run(): void
    {
        $phones = Phone::all()->pluck('id')->toArray();
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            User::create(
                [
                    'first_name' => $faker->firstName(),
                    'last_name' => $faker->lastName(),
                    'phones' => Arr::random($phones, random_int(1, 4)),
                ]
            );
        }
    }
}
