<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		DB::table('cyc_users')->insert([
			'username' => 'admin',
			'password' => Hash::make('password'),
			'email' => 'admin@courseyoucan.com.au',
			'created_at' => date('Y-m-d  H:i:s', time()),
			'updated_at' => date('Y-m-d  H:i:s', time()),
		]);

	}
}
