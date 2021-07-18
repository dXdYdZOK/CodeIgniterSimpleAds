<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAds extends Migration
{
        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'unsigned'       => true,
                                'auto_increment' => true
                        ],
                        'category_id'       => [
                                'type'           => 'INT',
                                'unsigned'       => true,
								'index'			=> true
                        ],
                        'title' => [
                                'type' => 'VARCHAR',
								'constraint'     => 255,
                                'null' => false
                        ],
						'text' => [
                                'type' => 'TEXT',
								'constraint' => 65535,
                                'null' => false
                        ]
                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('ads');
        }

        public function down()
        {
                $this->forge->dropTable('ads');
        }
}