<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Services>
 */
class ServicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->name(20);
        return [
            'user_id'=>1,
            'image'=>Str::random(15).".".'png',
            'title'=>$title,
            'slug'=>Str::slug($title),
            'body'=>$this->faker->text(100),
            'status'=>rand(0,1),
            'btn'=>'View Details',
        ];
    }
}
