<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Psy\Util\Str;


class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $title = $this->faker->sentence,  /* se crea un proyecto en la base de datos co nel modelo project*/
            'url' => Str::slug($title),
            'description' => $this->faker->paragraph
        ];
    }
}
