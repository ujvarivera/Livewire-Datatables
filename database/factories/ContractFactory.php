<?php

namespace Database\Factories;

use App\Models\Contract;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContractFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contract::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contract_number' => Str::random(8),
            'description' => $this->faker->text(20),
            'expiration_date' => $this->faker->dateTime(),
            'active' => $this->faker->boolean()
        ];
    }
}
