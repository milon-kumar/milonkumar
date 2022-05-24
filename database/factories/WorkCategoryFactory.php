<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkCategory>
 */
class WorkCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name;
        return [
            'user_id'=>1,
            'name'=>$name,
            'slug'=>Str::slug($name),
            'body'=>$this->faker->text(50),
            'status'=>rand(0,1),
        ];
    }
}
