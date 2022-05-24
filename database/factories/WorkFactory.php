<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Work>
 */
class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title  = $this->faker->name;
        return [
            'user_id'=>1,
            'work_category_id'=>rand(1,10),
            'image'=>Str::random(10),
            'title'=>$title,
            'slug'=>Str::slug($title),
            'body'=>$this->faker->text(1000),
            'btn'=>'View Details...',
            'hover_color'=>$this->faker->hexColor,
            'status'=>rand(0,1),
        ];
    }
}
