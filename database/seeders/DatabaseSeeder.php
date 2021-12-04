<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call(
            [
//                PhoneSeeder::class,
//                UserSeeder::class,
//                OwnerSeeder::class,
//                AddressSeeder::class,
                PropertySeeder::class,
            ]
        );
    }
}
