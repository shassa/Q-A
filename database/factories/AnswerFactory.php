<?php

namespace Database\Factories;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnswerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Answer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $questions = Question::pluck('id')->toArray();
        return [
            'name'=>$this->faker->name(),
            'answer'=>$this->faker->paragraph(),
            'question_id'=>$this->faker->randomElement($questions),
            'up'=>$this->faker->randomDigit,
            'down'=>$this->faker->randomDigit,
        ];
    }
}
