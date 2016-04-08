<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category as Category;
use App\Subcategory as Subcategory;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('CategoryTableSeeder');
		$this->call('SubcategoryTableSeeder');

	}

}

class CategoryTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */


	public function run()
	{
		Model::unguard();

		DB::table('categories')->delete();

		Category::create([
			'name' => 'Lexus'
		]);
		Category::create([
			'name' => 'Tesla'
		]);

	}
}

class SubcategoryTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */


	public function run()
	{
		Model::unguard();

		DB::table('subcategories')->delete();

		Subcategory::create([
			'category_id' => 1,
			'name' => 'CT Hybrid'
		]);
		Subcategory::create([
			'category_id' => 1,
			'name' => 'ES Hybrid'
		]);
		Subcategory::create([
			'category_id' => 1,
			'name' => 'RX Hybrid'
		]);
		Subcategory::create([
			'category_id' => 2,
			'name' => 'Model 3'
		]);
		Subcategory::create([
			'category_id' => 2,
			'name' => 'Model S'
		]);
		Subcategory::create([
			'category_id' => 2,
			'name' => 'Model X'
		]);
	}
}
