<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Categories extends Seeder
{
        public function run()
        {
                $data = [
					[
                        'parent_id' => 'null',
                        'name'    => 'Автомобили'
					],
					[
                        'parent_id' => 'null',
                        'name'    => 'Мотоциклы'
					]
				];

				foreach($data as $d)
				{
					//$this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $d);
					// Using Query Builder
					$this->db->table('categories')->insert($d);
				}
        }
}