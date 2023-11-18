<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    public function run(): void
    {
        Model::unguard();
        State::factory()->count(500)->create();
    }
}
