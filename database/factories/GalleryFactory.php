<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gallery>
 */
class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->name;
        return [
            'user_id'=>1,
            'title'=>$title,
            'slug'=>Str::slug($title),
            'image'=>$this->faker->imageUrl,
            'cat_status'=>'out',
            'text'=>$this->faker->text(20),
            'status'=>rand(0,1),
        ];
    }
}
