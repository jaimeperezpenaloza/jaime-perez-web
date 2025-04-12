<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(3);
        return [
            'title' => $title,
            'description' => $this->faker->paragraph(),
            'client' => $this->faker->company(),
            'industry' => $this->faker->word(),
            'technologies' => implode(', ', $this->faker->randomElements(['Laravel', 'PHP', 'MySQL', 'Tailwind', 'JS'], 3)),
            'date' => $this->faker->date(),
            'url' => $this->faker->url(),
            'cover_image' => 'default.png', // asegurate que esta imagen esté en public/img/projects/
            'gallery_images' => 'image1.png,image2.png,image3.png',
        ];
    }
}
