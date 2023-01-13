<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = app(Generator::class);

        Tenant::create([
            'id' => (string) Str::uuid(),
            'name' => $faker->name,
        ]);
    }
}
