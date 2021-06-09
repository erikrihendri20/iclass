<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create();
 
		for ($i = 0; $i < 100; $i++) {
			$jk = $faker->randomElement(['Laki-laki', 'Perempuan']);
			$data = [
				'nama' => $faker->name,
				'jurusan' => 'IPA',
				'kode_paket' => $faker->randomElement(['2', '3']),
				'telepon' => $faker->phoneNumber,
				'email' => $faker->email,
				'username' => $faker->userName,
				'password' => $faker->password,
				'bukti_pembayaran' => 'lalala',
				'status' => '1',
				'created_at' => date("m/d/Y h:i:s a", time()),
				'updated_at' => date("m/d/Y h:i:s a", time())
			];
			$this->db->table('users')->insert($data);
		}
	}
}
