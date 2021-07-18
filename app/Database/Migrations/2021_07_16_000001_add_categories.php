<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCategories extends Migration
{
        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'unsigned'       => true,
                                'auto_increment' => true
                        ],
                        'parent_id'       => [
                                'type'           => 'INT',
                                'unsigned'       => true,
								'index'			=> true,
								'null'=>true
                        ],
                        'name' => [
                                'type' => 'VARCHAR',
								'constraint'     => 255,
                                'null' => false
                        ]
                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('categories');
        }

        public function down()
        {
                $this->forge->dropTable('categories');
        }
}