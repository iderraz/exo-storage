<?php

namespace Database\Factories;

use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Users::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'prenom' => $this->faker->lastName(),
            'age' => $this->faker->numberBetween($int1= 18, $int2= 99),
            'email' => $this->faker->email(),
            'mdp' => $this->faker->password(),
            'date de naissance' => $this->faker->date(),
            'pdp' => $this->faker->url(),  
        ];
    }
}
