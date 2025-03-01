<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

// php spark make:migration	创建迁移文件
// php spark migrate	运行所有未应用的迁移
// php spark migrate:rollback	回滚上一次迁移
// php spark migrate:refresh	回滚所有迁移并重新运行
// php spark migrate:status	查看迁移状态
// php spark make:seed	创建种子文件
// php spark db:seed	运行种子文件
class CreateTable extends Migration
{
    public function up(): void
    {
        // 定义表结构
        $this->forge->addField([
            'id'         => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'name'       => ['type' => 'varchar', 'constraint' => 30, 'null' => true],
            'extra'      => ['type' => 'text', 'null' => true],
            'image'      => ['type' => 'text', 'null' => true],
            'created_at' => ['type' => 'datetime', 'null' => true],
            'updated_at' => ['type' => 'datetime', 'null' => true],
            'deleted_at' => ['type' => 'datetime', 'null' => true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('brands');
    }

    public function down()
    {
        // 回滚操作：删除表
        $this->forge->dropTable('games');
    }
}
