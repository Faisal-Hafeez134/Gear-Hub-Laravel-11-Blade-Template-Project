<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\CustomerModel;
use App\Models\StudentModel;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\CustomerFactory;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         $this->call([
            //  SeederPractice::class,

        ]);


        // User::factory(1000)->create();

        // User::factory()->create([
        //      'name' => 'Test User',
        //      'email' => 'test@example.com',
        // ]);


        Customer::factory()->count(10)->create();
        // StudentModel::factory()->count(10)->create();
         $this->call([
              StudentSeeder::class
         ]);
      //  CustomerFactory::factory()->count(10)->create();

    }
}
