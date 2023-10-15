<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title'        => $this->faker->sentence(),
            'description'  => $this->faker->paragraph(1),
            'content'      => $this->faker->paragraph(10),
            'category_id'  => CategoryFactory::new(),
            'user_id'      => UserFactory::new(),
            'status'       => $this->faker->randomElement([0,2,3]),
            'published_at' => Carbon::now(),
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now(),
        ];
    }
}
