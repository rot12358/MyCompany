<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model= Post::class;
    public function definition()
    {
        return [
            'Danhmucbaiviet' => $this ->faker->name(),
            'baiviet'=> $this->faker->paragraph(),
            'logodoitac'=> $this -> faker->imageUrl(),
            'category_id' => random_int(1,10),
        ];
    }
}
