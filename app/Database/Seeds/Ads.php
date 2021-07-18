<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Ads extends Seeder
{
        public function run()
        {
                $data = [
					[
                        'category_id' => 1,
                        'title'    => 'Продам Таврию',
						'text' => 'Неплохой тарантас'
					],
					[
                        'category_id' => 1,
                        'title'    => 'Продам Жигули',
						'text' => 'Помощнее, чем Таврия'
					],
					[
                        'category_id' => 1,
                        'title'    => 'Продам Москвич',
						'text' => 'Помощнее, чем Таврия но постарше, чем Жигули'
					],
					[
                        'category_id' => 2,
                        'title'    => 'Продам мотоцикл Иж Юпитер-5',
						'text' => 'Когда-то он был в хорошем состоянии'
					],
					[
                        'category_id' => 2,
                        'title'    => 'Продаётся мотоцикл "Урал"',
						'text' => 'Мощный двигатель и вал, но меня он задолбал'
					],
				];

				/*foreach($data as $d)
				{
					//$this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $d);
					// Using Query Builder
					$this->db->table('users')->insert($d);
				}*/
				$this->db->table('ads')->insertBatch($data);
        }
}