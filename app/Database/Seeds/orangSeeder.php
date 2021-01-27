<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class OrangSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama' => 'andika',
				'alamat'    => 'padalarang',
				'created_at' => Time::now(),
				'updated_at' => Time::now()
			],

		];
		// Using Query Builder
		$this->db->table('orang')->insert($data);
	}
}
