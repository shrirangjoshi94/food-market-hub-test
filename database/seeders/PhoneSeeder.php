<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Seed the phones table.
     *
     * @return void
     */
    public function run(): void
    {
        $types = Phone::PHONE_TYPES;
        $number = '987654321';
        for ($i = 1; $i < 10; $i++) {
            $phoneNumber = $number . $i;
            $phone = Phone::where('number', $phoneNumber)->first();

            if ($phone) {
                continue;
            }

            Phone::create(['number' => $phoneNumber, 'phone_type' => Arr::random($types)]);
        }
    }
}
