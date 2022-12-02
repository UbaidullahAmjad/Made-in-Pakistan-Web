<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'document' => $this->faker()->name,
            'order_no' => $this->faker()->randomNumber(),
            'order_date' => $this->faker()->dateTime(),
            'update_date' => $this->faker()->dateTime(),
            'payment_method' => $this->faker()->word(),
            'retail_price' => $this->faker()->randomNumber(),
            'status' => $this->faker()->numberBetween(1,7),
            'printed' => $this->faker()->word(),
            'actions' => $this->faker()->word()
        ];
    }
}
