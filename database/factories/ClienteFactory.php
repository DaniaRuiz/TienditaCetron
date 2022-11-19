<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre'=>$this->faker->name,
            'Apellido'=>$this->faker->lastName,
            'Direccion'=>$this->faker->address,
            'Telefono'=>$this->faker->phoneNumber
        ];
    }
}
