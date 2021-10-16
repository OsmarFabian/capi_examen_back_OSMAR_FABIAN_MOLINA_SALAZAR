<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Userdomicilio;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->has(Userdomicilio::factory())->count(100)->create();
    }
}
