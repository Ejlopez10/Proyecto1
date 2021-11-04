<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Trabajador;
class TrabajadorFactory extends Factory
{
    protected $model = Trabajador::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name,
            'apellido'=>$this->faker->lastName,
            'telefono'=>$this->faker->tollFreePhoneNumber,
            'sueldo'=>$this->faker->numberBetween(6000,20000),
            'Tipo de pago'=>$this->faker->creditCardType('MasterCard'),
            'Direccion'=>$this->faker->country,
            'Edad'=>$this->faker->numberBetween(18,65),
            //
        ];
    }
}
