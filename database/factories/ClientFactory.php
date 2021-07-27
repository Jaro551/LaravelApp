<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Maciej',
            'surname' => 'Kowalski',
            'phone_number' => '321321321',
            'email' => 'mail@mail.pl',
            'address' => "Miasto 13",
            'date_of_birth' => '2000-10-10'
        ];
    }
}
