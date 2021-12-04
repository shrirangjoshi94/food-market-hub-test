<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\{Owner, User};
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $users = User::all()->random(5)->pluck('id');
        foreach ($users as $user) {
            Owner::updateOrCreate(['user_id' => $user], ['main_owner' => rand(0, 1)]);
        }
    }
}
