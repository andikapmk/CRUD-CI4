<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class OrangSeeder extends Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create('id', 'ID');

		for ($i = 0; $i < 100; $i++) {

			$data = [
				'nama' 		 => $faker->name,
				'alamat'     => $faker->address,
				'created_at' => Time::now(),
				'updated_at' => Time::now()

			];
			// Using Query Builder
			$this->db->table('orang')->insert($data);
		}
	}
}
