<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Producto;
class ProductoFactory extends Factory
{
    protected $model = Producto::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Distribuidora'=>$this->faker->domainWord,
            'nombre_Producto'=>$this->faker->name,
             'Precio'=>$this->faker->numberBetween(5,70),
             'Cantidad'=>$this->faker->numberBetween(0,100),
             'Fecha_Compra'=>$this->faker->date,
             'Fecha_Vence'=>$this->faker->date,
            //
        ];
    }
}
