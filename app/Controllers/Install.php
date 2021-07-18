<?php

namespace App\Controllers;
//use App\Database\Migrations;

class Install extends \CodeIgniter\Controller
{
        public function index()
        {
                $migrate = \Config\Services::migrations();
				$seeder = \Config\Database::seeder();
				
				var_dump($migrate->findMigrations());
				

                        $migrate->latest();
						$seeder->call('categories');
						$seeder->call('ads');

                //catch (\Throwable $e)

                        // Do something with the error here...

        }
}