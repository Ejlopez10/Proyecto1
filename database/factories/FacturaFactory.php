<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Factura;
class FacturaFactory extends Factory
{
    protected $model = Factura::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_Producto'=>$this->faker->name,
            'RTN Cliente'=>$this->faker->numberBetween(110119920,540334520),
            'Fecha_Compra'=>$this->faker->date,
            'Fecha_Vence'=>$this->faker->date,
             'Precio'=>$this->faker->numberBetween(5,70),
             'Total'=>$this->faker->numberBetween(5,70),
             'ISV(IMPUESTO/VENTA)'=>$this->faker->numberBetween(10,15)
            //
        ];
    }
}
