<?php

namespace Database\Seeders;

use App\Models\SeedersModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



class SeederPractice extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('seeders')->insert([
            'fullname' => str::random(10),
             'email' => Str::random(10).'gcoogle.com',
            'password' => Hash::make('password'),
        ]);

    }
}
