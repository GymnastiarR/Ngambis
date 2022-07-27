<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Option>
 */
class OptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected static $i = 0;
    public function definition()
    {
        self::$i++;

        return [
            // [
                'body' => \fake()->word(),
                'question_id' => self::$i,
                'is_true' => 1
            // ],
            // [
            //     'body' => \fake()->word(),
            //     'id_question' => self::$i,
            //     'is_true' => 0
            // ],
            // [
            //     'body' => \fake()->word(),
            //     'id_question' => self::$i,
            //     'is_true' => 0
            // ],
            // [
            //     'body' => \fake()->word(),
            //     'id_question' => self::$i,
            //     'is_true' => 0
            // ],
        ];
    }
}
