<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Container\Container;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ResellerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = $this->withFaker();
        for ($i = 1; $i <= 10; $i++) {
            DB::connection('mysql_test')->table('cert')->insert([
                'confirmed' => $faker->boolean($chanceOfGettingTrue = 50),
                'visitor' => $faker->ipv4,
                'hostname' => $faker->word,
                'main_group' => Str::random(10),
                'sub_group' => Str::random(10),
                'monitor' => $faker->boolean,
                'alert' => $faker->boolean,
                'community' => Str::random(30),
                'email' => $faker->unique()->safeEmail,
                'note' => $faker->text(200),
                'created_at' => $faker->dateTimeThisYear($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTimeThisYear($max = 'now', $timezone = null),
            ]);
        }
    }


    /**
     * 获取 Faker 实例
     *
     * @return Generator
     */
    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }
}
