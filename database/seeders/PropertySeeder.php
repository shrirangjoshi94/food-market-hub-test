<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;
use App\Models\{Address, Owner, Property};

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $addresses = Address::all()->random(10)->pluck('id');
        $owners = Owner::all()->pluck('id')->toArray();
        foreach ($addresses as $address) {
            Property::updateOrCreate(['address_id' => $address], ['owners' => Arr::random($owners, rand(1, 5))]);
        }
    }
}
