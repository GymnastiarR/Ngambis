<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'body' => \implode('</p><p>',\fake()->paragraphs(4)),
            'is_published' => \mt_rand(0, 1),
            'category' => 'Matematika',
        ];
    }
}
