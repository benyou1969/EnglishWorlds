<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			$users = factory(English\User::class, 1000)->create();
		}
}