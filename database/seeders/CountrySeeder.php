<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{

    public function run(): void
    {
        Model::unguard();
        Country::factory()->count(500)->create();
    }
}
