<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Str;

class UsersFactory extends Factory
{
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
