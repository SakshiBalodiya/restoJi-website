<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Factory as FakerFactory;
class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = FakerFactory::create('en_IN'); 
         return [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$dnkU6ak8ugyULoaZQtcXKebOrbIShiUHCrNFiaDRnFU47EHkJaOQi', // hashed 'admin1234'
            'remember_token' => Str::random(10),
        ];
    }
}
