<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('users');
        $table->addColumn('username', 'string', ['limit' => 255])
              ->addColumn('password', 'string', ['limit' => 255])
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime')
              ->create();
    }

    public function down()
    {
        $this->table('users')->drop()->save();
    }
}
