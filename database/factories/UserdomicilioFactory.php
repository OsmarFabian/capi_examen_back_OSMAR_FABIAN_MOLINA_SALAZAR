<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Userdomicilio;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class UserdomicilioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Userdomicilio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'domicilio' => $this->faker->address(),
            'numero_exterior'=> Str::random(4),
            'colonia'=>  $this->faker->name(),
            'cp'=> Str::random(5),
            'ciudad'=>  $this->faker->city(),
        ];
    }
}
