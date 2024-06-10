<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StagiaireSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Stagiaire::factory()->count(100)->create();
    }
}
