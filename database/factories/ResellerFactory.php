<?php

namespace Database\Factories;

use App\Models\Reseller;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ResellerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reseller::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'confirmed' => $this->faker->boolean($chanceOfGettingTrue = 50),
            'visitor' => $this->faker->ipv4,
            'hostname' => $this->faker->word,
            'main_group' => Str::random(10),
            'sub_group' => Str::random(10),
            'monitor' => $this->faker->boolean,
            'alert' => $this->faker->boolean,
            'community' => Str::random(30),
            'email' => $this->faker->unique()->safeEmail,
            'note' => $this->faker->text(200),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            // 'created_at' => $this->faker->dateTimeThisYear($max = 'now', $timezone = null),
            // 'updated_at' => $this->faker->dateTimeThisYear($max = 'now', $timezone = null),
        ];
    }
}
