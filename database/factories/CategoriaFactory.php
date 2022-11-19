<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categoria;
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NombreCategoria'=>$this->faker->name,
            'DescripcionCategoria'=>$this->faker->word,
            'CodigoCategoria'=>$this->faker->numerify('#####')
        ];
    }
}
