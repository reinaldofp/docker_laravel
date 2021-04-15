<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();

        return [
            'title' => $faker->name, // titulo do produto
            'content' => $faker->title,
            'preco_compra' =>  $faker->unique()->numberBetween(50,100),      
            'preco_venda' => $faker->unique()->numberBetween(110,200), 
        ];
    }
}
