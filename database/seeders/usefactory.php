<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\forfactory;

class usefactory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        forfactory::factory()->count(10)->create();
    }
}
