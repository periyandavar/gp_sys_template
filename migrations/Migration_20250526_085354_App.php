<?php

use System\Core\Migration;

class Migration_20250526_085354_App extends Migration
{
    public function up(): void
    {
        $this->createTable('app', [
            'id' => 'INT AUTO_INCREMENT PRIMARY KEY',
            'name' => 'VARCHAR(255) NOT NULL',
            'version' => 'VARCHAR(50) NOT NULL',
            'description' => 'TEXT',
            'author' => 'VARCHAR(255)',
            'created_at' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ]);
        $this->insert('app', [
            'name' => 'System',
            'version' => '1.0.0',
            'description' => 'Core system application',
            'author' => 'System Team'
        ]);
    }

    public function down(): void
    {
        $this->dropTable('app');
    }
}
