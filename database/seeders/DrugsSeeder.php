<?php

namespace Database\Seeders;
use App\Models\Drugs;
use Illuminate\Database\Seeder;

class DrugsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Drugs::factory(25)->create();
    }
}
