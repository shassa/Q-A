<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'title'=>$this->faker->text($maxNbChars = 150),
            'question'=>$this->faker->paragraph(),
            'up'=>$this->faker->randomDigit,
            'down'=>$this->faker->randomDigit,
        ];
    }
}
