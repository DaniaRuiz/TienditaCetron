<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Producto; 
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NombreProducto'=>$this->faker->jobTitle,
           'VendedorProducto'=>$this->faker->name,
            'PrecioProducto'=>$this->faker->numberBetween(20, 20000),
            'DescripcionProducto'=>$this->faker->word  
        ];
    }
}
