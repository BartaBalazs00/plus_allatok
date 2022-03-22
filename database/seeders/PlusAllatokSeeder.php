<?php

namespace Database\Seeders;

use App\Models\PlusAllatok;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlusAllatokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PlusAllatok::factory(10)->create();
    }
}
