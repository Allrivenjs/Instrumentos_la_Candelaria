<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $name = $this->faker->name;
        return [
            'sku'=>$this->faker->isbn13(),
            'name'=>$name,
            'price'=>$this->faker->numberBetween(0, 1000000),
            'weight'=>$this->faker->numberBetween(0.5, 4),
            'description'=>$this->faker->text(500),
            'thumbnail'=> 'storage/product/' . $this->faker->image('public/storage/product', 340,280, null, false),
            'stock'=>$this->faker->numberBetween(0, 100),
            'slug'=>Str::slug($name),
            'user_id'=>User::all()->random()->id
        ];
    }
}
