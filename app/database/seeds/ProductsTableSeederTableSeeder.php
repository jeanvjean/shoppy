<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();

		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Product::create([
				'title'       => $faker->word,
				'description' => $faker->text,
				'price'       => $faker->randomFloat
			]);
		}
	}

}